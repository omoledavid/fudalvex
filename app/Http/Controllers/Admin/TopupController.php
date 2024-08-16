<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Settings;
use App\Models\Tp_Transaction;
use App\Models\User;
use App\Notifications\AccountNotification;
use App\Traits\PingServer;
use Illuminate\Http\Request;

class TopupController extends Controller
{
    use PingServer;

    //top up route
    public function topup(Request $request)
    {
        $user = User::where('id', $request->user_id)->first();
        $user_bal = $user->account_bal;
        $user_bonus = $user->bonus;
        $user_roi = $user->roi;
        $user_Ref = $user->ref_bonus;

        $formatResponse = [
            'topUpType' => $request->t_type,
            'userBalance' => $user_bal,
            'userRoi' => $user_roi,
            'userRef' => $user_Ref,
            'userBonus' => $user_bonus,
            'type' => $request->type,
            'amount' => $request->amount,
        ];
        // echo $formatResponse['topUpType']; die;



        if ($formatResponse['topUpType'] == 'Credit') {
            if ($formatResponse['type'] == "Bonus") {
                User::where('id', $request['user_id'])
                    ->update([
                        'bonus' => $formatResponse['userBonus'] + $formatResponse['amount'],
                        'account_bal' => $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Profit") {
                User::where('id', $request->user_id)
                    ->update([
                        'roi' => $formatResponse['userRoi'] + $formatResponse['amount'],
                        'account_bal' =>  $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Ref_Bonus") {
                User::where('id', $request->user_id)
                    ->update([
                        'ref_bonus' => $formatResponse['userRef'] + $formatResponse['amount'],
                        'account_bal' =>  $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "balance") {
                User::where('id', $request->user_id)
                    ->update([
                        'account_bal' =>  $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Deposit") {

                $dp = new Deposit();
                $dp->amount = $request['amount'];
                $dp->payment_mode = 'Express Deposit';
                $dp->status = 'Processed';
                $dp->plan = $request['user_pln'];
                $dp->user = $request['user_id'];
                $dp->save();

                User::where('id', $request['user_id'])
                    ->update([
                        'account_bal' =>  $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            }
            $currency = Settings::select('currency')->find(1);

            // Send notification to user
            $user->notify(new AccountNotification("You have a new {$request->type} transaction. Amount: {$currency}{$request->amount}.", 'System Topup'));

            //add history
            Tp_Transaction::create([
                'user' => $request->user_id,
                'plan' => $formatResponse['type'],
                'amount' => $request->amount,
                'type' => $request->type,
            ]);
        } elseif ($formatResponse['topUpType'] == 'Debit') {
            if ($formatResponse['type'] == "Bonus") {
                User::where('id', $request['user_id'])
                    ->update([
                        'bonus' => $formatResponse['userBonus'] - $formatResponse['amount'],
                        'account_bal' => $formatResponse['userBalance'] - $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Profit") {
                User::where('id', $request->user_id)
                    ->update([
                        'roi' => $formatResponse['userRoi'] - $formatResponse['amount'],
                        'account_bal' =>  $formatResponse['userBalance'] - $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Ref_Bonus") {
                User::where('id', $request->user_id)
                    ->update([
                        'ref_bonus' => $formatResponse['userRef'] - $formatResponse['amount'],
                        'account_bal' =>  $formatResponse['userBalance'] - $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "balance") {
                User::where('id', $request->user_id)
                    ->update([
                        'account_bal' =>  $formatResponse['userBalance'] - $formatResponse['amount'],
                    ]);
            } elseif ($formatResponse['type'] == "Deposit") {

                $dp = new Deposit();
                $dp->amount = $request['amount'];
                $dp->payment_mode = 'Debit';
                $dp->status = 'Processed';
                $dp->plan = $request['user_pln'];
                $dp->user = $request['user_id'];
                $dp->save();

                User::where('id', $request['user_id'])
                    ->update([
                        'account_bal' =>  $formatResponse['userBalance'] + $formatResponse['amount'],
                    ]);
            }
            $currency = Settings::select('currency')->find(1);

            // Send notification to user
            $user->notify(new AccountNotification("You have a new {$request->type} transaction. Amount: {$currency}{$request->amount}.", 'System Topup'));

            //add history
            Tp_Transaction::create([
                'user' => $request->user_id,
                'plan' => $formatResponse['type'],
                'amount' => $request->amount,
                'type' => 'Debit',
            ]);
        }


        return redirect()->back()->with('success', 'Action Successful!');
    }
}
