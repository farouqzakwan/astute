<?php

namespace App\Http\Livewire;

use App\Models\UserCustomers;
use Livewire\Component;

class ListCustomers extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth()->user();  
    }

    public function render()
    {
        $listing = UserCustomers::where('user_id',$this->user->id)
                    ->paginate(10);
        return view('livewire.list-customers',compact('listing'));
    }
}
