<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\UserCustomers;
use Livewire\Component;

class TotalClient extends Component
{
    public $user;
    public function mount()
    {
        $this->user = Auth()->user();
    }

    public function render()
    {
        
        $totalClient = UserCustomers::where('user_id',$this->user->id)->count();
        return view('livewire.dashboard.total-client',compact('totalClient'));
    }
}
