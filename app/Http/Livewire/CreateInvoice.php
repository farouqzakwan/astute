<?php

namespace App\Http\Livewire;

use App\Models\Currencies;
use App\Models\UserCustomers;
use App\Models\UserInvoiceTaxes;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CreateInvoice extends Component
{
    public $userCompany = [];
    public $client = [];
    public $customers = [];
    public $search;
    public $currencies;
    public $taxes = 
    [
        'ABC 0%',
        'DEF 0%',
        'GST 0%'
    ];
    public $invoiceNumber;
    public $invoiceDate;
    public $invoiceDue;
    public $invoiceItems = [];
    public $item = '';
    public $description = '';
    public $price = 0.00;
    public $quantity = 0;
    public $total = 0; 
    public $subtotal = 0;
    public $user;

    public function hydrate()
    {
        $this->user = Auth()->user();
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
        $this->userCompany = [
            'name'          => $this->user->userCompany[0]->company_name ?? '',
            'address'       => [
                'address1'      => $this->user->userCompany[0]->address1 ?? '',
                'address2'      => $this->user->userCompany[0]->address2 ?? '',
                'postcode'      => $this->user->userCompany[0]->postcode ?? '',
                'city'          => $this->user->userCompany[0]->city ?? '',
                'state'         => $this->user->userCompany[0]->state ?? '',
            ],
            'companyLogo'   => $this->user->userCompany[0]->userCompanyLogo->location ?? 'image/icons/image.png'
        ];

        $this->currencies = Currencies::get();
        $this->taxes = UserInvoiceTaxes::where('user_id',$this->user->id)->get();
    }

    public function render()
    {
        $this->total = $this->calculateTotal();
        $this->subtotal = $this->calculateSubtotal();
        return view('livewire.create-invoice');
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
    }

    public function addItem()
    {
        array_push($this->invoiceItems,[
            'item'              => $this->item ?? '',
            'description'       => $this->description ?? '',
            'price'             => $this->price ?? 0,
            'quantity'          => $this->quantity ?? 0,
            'total'             => $this->calculateTotal(),
        ]);   

        $this->resetItem();
    }   

    public function saveInvoice()
    {
        $this->dispatchBrowserEvent('notification',[
            'status'    => true,
            'title'     => 'Congratulations!',
            'message'   => 'Successfully adding new invoice ...'
        ]);
    }





    
    private function resetItem()
    {
        $this->item = '';
        $this->description = '';
        $this->price = 0.00;
        $this->quantity = 0;
    }

    private function calculateTotal()
    {
        return number_format(($this->price ?? 0) * ($this->quantity ?? 0),2);    
    }

    private function calculateSubtotal()
    {
        $subtotal = 0;
        foreach ($this->invoiceItems as $key => $items) 
        {
            $subtotal += ($items['total'] ?? 0);
        }
        return number_format($subtotal,2);
    }
}
