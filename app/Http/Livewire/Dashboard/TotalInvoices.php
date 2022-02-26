<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\UserInvoices;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TotalInvoices extends Component
{
    public $user;
    public function mount()
    {
        $this->user = Auth()->user();
    }

    public function render()
    {
        $totalInvoices = UserInvoices::where('user_id',$this->user->id)->count();
        return view('livewire.dashboard.total-invoices',compact('totalInvoices'));
    }
}
