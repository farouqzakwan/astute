<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\UserInvoices;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InvoiceAmount extends Component
{
    public $user;
    public function mount()
    {
        $this->user = Auth()->user();
    }

    public function render()
    {
        $userInvoices = UserInvoices::select(DB::raw('sum(total) as total, currency_id'))
                        ->where('user_id',$this->user->id)
                        ->groupBy('currency_id')
                        ->with('currency')
                        ->get();
        return view('livewire.dashboard.invoice-amount',compact('userInvoices'));
    }
}
