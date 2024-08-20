<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\User_plans;
use App\Models\Tp_Transaction;
use App\Mail\NewRoi;
use App\Mail\endplan;
use App\Mail\NewNotification;
use App\Models\Mt4Details;
use App\Notifications\AccountNotification;
use App\Services\ReferralCommisionService;
use App\Traits\BinanceApi;
use App\Traits\Coinpayment;
use App\Traits\PingServer;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AutoTaskController extends Controller
{
    use Coinpayment, BinanceApi, PingServer;

    public function autotopup()
    {
        try {
            // automatic roi
            $this->automaticRoi();

            // check for subscription expiration
            $this->checkSubscription();

            // do auto confirm payments
            $this->queryOrder();

            // Log the execution
            Log::info("Automatic ROI task ran successfully");

            // Only echo if not running from a console (e.g., cron job)
            if (!app()->runningInConsole()) {
                echo "Automatic ROI is working properly \n CoinPayment:";
            }

            return $this->cpaywithcp();
        } catch (\Exception $e) {
            Log::error("Auto top-up failed: " . $e->getMessage());
        }
    }


    private function checkSubscription()
    {
        try {
            $subscriptions = Mt4Details::where('status', 'active')->get();
            $today = now();
            $settings = Settings::find(1);

            foreach ($subscriptions as $sub) {
                $this->processSubscription($sub, $today, $settings);
            }
        } catch (\Exception $e) {
            Log::error("Subscription check failed: " . $e->getMessage());
        }
    }

    private function processSubscription($sub, $today, $settings)
    {
        $endAt = Carbon::parse($sub->end_date);
        $remindAt = Carbon::parse($sub->reminded_at);
        $singleSub = Mt4Details::find($sub->id);
        $user = User::find($singleSub->client_id);

        if ($today->isSameDay($endAt) && $singleSub->status != 'Expired') {
            $this->expireSubscription($singleSub, $user, $settings);
        }

        if ($today->isSameDay($remindAt)) {
            $this->remindSubscription($singleSub, $endAt, $settings);
        }
    }

    private function expireSubscription($singleSub, $user, $settings)
    {
        $singleSub->status = 'Expired';
        $singleSub->save();

        $messageUser = "Your subscription with MT4-ID: {$singleSub->mt4_id} has expired. To enable us to continue trading on this account, please renew your subscription. \r\n To renew your subscription, login to your {$settings->site_name} account, go to managed accounts page and click on the renew button on the affected account.";
        $messageAdmin = "Subscription with MT4-ID: {$singleSub->mt4_id} has expired, and the user has been notified.";

        try {
            Mail::to($user->email)->send(new NewNotification($messageUser, 'Your subscription has expired', $user->firstname));
            Mail::to($settings->contact_email)->send(new NewNotification($messageAdmin, 'Subscription Expired', 'Admin'));
        } catch (\Exception $e) {
            Log::error("Failed to send subscription expiration email: " . $e->getMessage());
        }
    }

    private function remindSubscription($singleSub, $endAt, $settings)
    {
        $daysLeft = $endAt->diffInDays(now());

        $message = "Your subscription with MT4-ID: {$singleSub->mt4_id} will expire in {$daysLeft} days. To avoid disconnection of your trading account, please renew your subscription before {$endAt->toDateString()}. \r\n To renew your subscription, login to your {$settings->site_name} account, go to managed accounts page and click on the renew button on the affected account.";

        try {
            Mail::to($singleSub->tuser->email)->send(new NewNotification($message, 'Subscription Expiration Reminder', $singleSub->tuser->firstname));
        } catch (\Exception $e) {
            Log::error("Failed to send subscription reminder email: " . $e->getMessage());
        }

        $singleSub->reminded_at = now()->addDay();
        $singleSub->save();
    }

    private function automaticRoi()
    {
        try {
            User_plans::where('active', 'yes')->chunkById(200, function ($usersPlans) {
                $settings = Settings::find(1);

                foreach ($usersPlans as $plan) {
                    $this->processPlanRoi($plan, $settings);
                }
            });
        } catch (\Exception $e) {
            Log::error("Automatic ROI calculation failed: " . $e->getMessage());
        }
    }

    private function processPlanRoi($plan, $settings)
    {
        $now = now();
        $dplan = Plans::find($plan->plan);
        $user = User::find($plan->user);

        $nextDrop = $this->calculateNextDrop($plan->last_growth, $dplan->increment_interval);

        if ($this->shouldIncrementRoi($plan, $user, $settings, $now, $nextDrop)) {
            $this->incrementRoi($plan, $dplan, $user, $settings, $nextDrop);
        }

        if ($this->hasExpired($plan, $now)) {
            $this->handlePlanExpiration($plan, $dplan, $user, $settings);
        }
    }

    private function calculateNextDrop($lastGrowth, $interval)
    {
        switch ($interval) {
            case "Monthly":
                return $lastGrowth->addDays(27);
            case "Weekly":
                return $lastGrowth->addDays(6);
            case "Daily":
                return $lastGrowth->addHours(23);
            case "Hourly":
                return $lastGrowth->addMinutes(54);
            case "Every 30 Minutes":
                return $lastGrowth->addMinutes(24);
            case "Every 1 Minute":
                return $lastGrowth->addMinutes(1);
            default:
                return $lastGrowth->addMinutes(7);
        }
    }

    private function shouldIncrementRoi($plan, $user, $settings, $now, $nextDrop)
    {
        return $now->lessThanOrEqualTo($plan->expire_date) &&
            $settings->trade_mode === 'on' &&
            $user->trade_mode === 'on' &&
            ($now->isWeekday() || $settings->weekend_trade === 'on') &&
            $now->greaterThanOrEqualTo($plan->last_growth);
    }

    private function incrementRoi($plan, $dplan, $user, $settings, $nextDrop)
    {
        $increment = $dplan->increment_type === "Percentage"
            ? (intval($plan->amount) * $dplan->increment_amount) / 100
            : $dplan->increment_amount;

        $user->account_bal += $increment;
        $user->roi += $increment;
        $user->save();

        Tp_Transaction::create([
            'plan' => $dplan->name,
            'user' => $user->id,
            'amount' => $increment,
            'user_plan_id' => $plan->id,
            'type' => "ROI",
        ]);

        $plan->update([
            'last_growth' => $nextDrop,
            'profit_earned' => $plan->profit_earned + $increment,
        ]);

        if ($settings->referral_proffit_from !== 'Deposit') {
            $referralService = new ReferralCommisionService($user, $increment);
            $referralService->run();
        }

        $user->notify(new AccountNotification("You have a new profit. Plan: {$dplan->name}, Amount: {$settings->currency}{$increment}", 'New Profit record'));

        if ($user->sendroiemail === 'Yes') {
            try {
                Mail::to($user->email)->send(new NewRoi($user, $dplan->name, $increment, now(), 'New Return on Investment(ROI)'));
            } catch (\Exception $e) {
                Log::error("Failed to send ROI email: " . $e->getMessage());
            }
        }
    }

    private function hasExpired($plan, $now)
    {
        return $now->greaterThan($plan->expire_date);
    }

    private function handlePlanExpiration($plan, $dplan, $user, $settings)
    {
        if ($settings->return_capital) {
            $user->account_bal += $plan->capital;
        }

        $user->save();

        $plan->update(['active' => 'expired']);

        if ($settings->send_notification) {
            $user->notify(new AccountNotification("Your investment plan has expired. Plan: {$dplan->name}, Capital: {$settings->currency}{$plan->capital}.", 'Investment Plan Ended'));
        }

        try {
            Mail::to($user->email)->send(new endplan($user, $dplan->name, $plan->capital, now(), 'Investment Plan Expired'));
        } catch (\Exception $e) {
            Log::error("Failed to send plan expiration email: " . $e->getMessage());
        }
    }
}
