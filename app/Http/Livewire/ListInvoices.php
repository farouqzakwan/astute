<?php

namespace App\Http\Livewire;

use App\Models\UserInvoices;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListInvoices extends Component
{

    public $invoices;
    public $user;

    public function mount()
    {
        $this->user = Auth()->user();
        $this->invoices = UserInvoices::where('user_id',$this->user->id)->get(); 
    }

    public function render()
    {
        return view('livewire.list-invoices');
    }
}
