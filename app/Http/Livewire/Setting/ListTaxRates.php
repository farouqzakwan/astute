<?php

namespace App\Http\Livewire\Setting;

use App\Models\UserInvoiceTaxes;
use Livewire\Component;

class ListTaxRates extends Component
{
    public $user;

    public function render()
    {
        $this->user = Auth()->user();
        $listing = UserInvoiceTaxes::where('user_id',$this->user->id)->paginate(10);

        return view('livewire.setting.list-tax-rates',compact('listing'));
    }
}
