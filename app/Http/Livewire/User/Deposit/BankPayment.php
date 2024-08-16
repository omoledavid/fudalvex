<?php

namespace App\Http\Livewire\User\Deposit;

use App\Models\Settings;
use Livewire\Component;

class BankPayment extends Component
{
    public function render()
    {
        $settings = Settings::select('theme')->find(1);
        return view("{$settings->theme}.livewire.user.deposit.bank-payment");
    }
}
