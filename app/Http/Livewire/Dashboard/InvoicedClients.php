<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\UserInvoiceBuyers;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class InvoicedClients extends Component
{
    public $user;
    public function mount()
    {
        $this->user = Auth()->user();
    }

    public function render()
    {
        $userInvoiceBuyers = UserInvoiceBuyers::select(DB::raw('count(id) as total, name'))
                            ->groupBy('name')
                            ->whereHas('user_invoice',function($query){
                                $query->where('user_id',$this->user->id);
                            })
                            ->get();
        return view('livewire.dashboard.invoiced-clients',compact('userInvoiceBuyers'));
    }
}
