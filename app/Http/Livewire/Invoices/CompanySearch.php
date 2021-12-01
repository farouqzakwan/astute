<?php

namespace App\Http\Livewire\Invoices;

use App\Models\UserCustomers;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompanySearch extends Component
{
    public $client = []; 
    public $customers = [];
    public $user;
    public $search;
    
    public function updatedSearch()
    {
        $this->customers = UserCustomers::where('user_id',$this->user->id)
                            ->when($this->search,function($q){
                                $q->where('name','like','%'.$this->search.'%');
                            })
                            ->limit(5)
                            ->get()
                            ->toArray();
    }

    public function mount()
    {
       $this->user = Auth()->user();
    }

    public function render()
    {
        return view('livewire.invoices.company-search');
    }


    public function selectCustomer($customerId)
    {
        $selectedCustomer = UserCustomers::where('user_id',$this->user->id)->find($customerId);
        $this->client = [
            'name'      => $selectedCustomer->name ?? '',
            'address'   => [
                'address1'  => $selectedCustomer->userCustomerAddress[0]->address1 ?? '',
                'address2'  => $selectedCustomer->userCustomerAddress[0]->address2 ?? '',
                'postcode'  => $selectedCustomer->userCustomerAddress[0]->postcode ?? '',
                'city'      => $selectedCustomer->userCustomerAddress[0]->city ?? '',
                'state'     => $selectedCustomer->userCustomerAddress[0]->state ?? '',
            ]
        ];
        $this->emit('selectCustomer',$this->client);
    }
}
