<?php

namespace App\Http\Livewire;

use App\Models\Currencies;
use App\Models\UserInvoiceBuyers;
use App\Models\UserInvoiceItems;
use App\Models\UserInvoices;
use App\Models\UserInvoiceSellers;
use App\Models\UserInvoiceTaxes;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateInvoice extends Component
{
    public $userCompany = [];
    public $clients;
    public $currencies;
    public $selectedCurrency;
    public $taxes = [];
    public $selectedTax;
    public $invoiceNumber;
    public $invoiceDate;
    public $invoiceDue;
    public $invoiceItems = [];
    public $total = 0; 
    public $subtotal = 0;
    public $user;
    public $taxAmount = 0;

    protected $listeners = ['selectCustomer','updatedItems','selectedTax','taxAmount'];

    public function updatedInvoiceItems()
    {
        foreach ($this->invoiceItems as $key => $item) 
        {
           $this->invoiceItems[$key]['total'] = (!empty($item['price'])?$item['price']:0) * (!empty($item['quantity'])?$item['quantity']:0);
        }
        $this->total = $this->calculateTotal();
    }

    public function mount()
    {
        $this->user = Auth()->user();
        $this->userCompany = [
            'id'            => $this->user->main_company->user_company_id ?? null,
            'name'          => $this->user->main_company->company_name ?? '',
            'address'       => [
                'address1'      => $this->user->main_company->address_1 ?? '',
                'address2'      => $this->user->main_company->address_2 ?? '',
                'postcode'      => $this->user->main_company->postcode ?? '',
                'city'          => $this->user->main_company->city ?? '',
                'state'         => $this->user->main_company->state ?? '',
            ],
            'companyLogo'   => $this->user->main_company->company_logo ?? 'image/icons/image.png',
            'storage'       => $this->user->main_company->storage ?? config('filesystems.default')
        ];

        $this->currencies = Currencies::get();
        $this->taxes = UserInvoiceTaxes::where('user_id',$this->user->id)->first();
    }

    public function render()
    {
        $this->subtotal = $this->calculateSubtotal();
        $this->total = $this->calculateTotal();
        return view('livewire.create-invoice');
    }

    public function saveInvoice()
    {
        DB::transaction(function () {
            //user invoice
            $user_invoices = UserInvoices::create([
                'user_id'           => $this->user->id,
                'user_company_id'   => $this->userCompany['id'],
                'invoice_number'    => $this->invoiceNumber,
                'invoice_date'      => $this->invoiceDate,
                'payment_due'       => $this->invoiceDue,
                'user_invoice_tax_id' => $this->taxes['id']?? null,
                'tax_name'  => $this->taxes['name'] ?? null,
                'rate'  => $this->taxes['rate'] ?? null,
                'currency_id'   => $this->currencies[$this->selectedCurrency ?? 0]->id ?? null,
                'subtotal'  => $this->subtotal ?? 0,                                                    //price before tax
                'total' => $this->total ?? 0,                                                           //price after tax
            ]);
            
            //userInvoiceSellers
            $user_invoice_sellers  = UserInvoiceSellers::create([
                'user_invoice_id'   => $user_invoices->id,
                'name'              => $this->userCompany['name'] ?? null,
                'address1'          => $this->userCompany['address']['address1'] ?? null,
                'address2'          => $this->userCompany['address']['address2'] ?? null,
                'city'              => $this->userCompany['address']['city'] ?? null,
                'state'             => $this->userCompany['address']['state'] ?? null,
                'postcode'          => $this->userCompany['address']['postcode'] ?? null,
                'country'           => $this->userCompany['address']['country'] ?? null,
                'logo'              => $this->userCompany['companyLogo'] ?? null
            ]);

            //userInvoiceBuyers
            $user_invoice_buyers = UserInvoiceBuyers::create([
                'user_invoice_id'   => $user_invoices->id,
                'name'              => $this->clients['name'] ?? null,
                'address1'          => $this->clients['address']['address1'] ?? null,
                'address2'          => $this->clients['address']['address2'] ?? null,
                'city'              => $this->clients['address']['city'] ?? null,
                'state'             => $this->clients['address']['state'] ?? null,
                'postcode'          => $this->clients['address']['postcode'] ?? null,
                'country'           => $this->clients['address']['country'] ?? null,
                'logo'              => $this->clients['companyLogo'] ?? null
            ]);

            if($user_invoices)
            {
                foreach ($this->invoiceItems as $key => $item) 
                {
                    $items[] = 
                    [
                        'invoice_id'    => $user_invoices->id,
                        'item'          => $item['item'] ?? null,
                        'description'   => $item['description'] ?? null,
                        'price'         => $item['price'] ?? null,
                        'quantity'      => $item['quantity'] ?? null,
                        'total'         => $item['total'] ?? null,
                        'created_at'    => Carbon::now(),
                        'updated_at'    => Carbon::now()
                    ];
                }
                UserInvoiceItems::insert($items);
            }

            $this->dispatchBrowserEvent('notification',[
                'status'    => true,
                'title'     => 'Congratulations!',
                'message'   => 'Successfully adding new invoice ...'
            ]);
        });
    }

    public function selectCustomer($value)
    {
        $this->clients = $value;
    }

    public function updatedItems($value)
    {
        $this->invoiceItems = $value;
    }

    public function selectedTax($value)
    {
        $this->taxes = $value;
    }

    public function taxAmount($value)
    {
        $this->taxAmount = $value;
    }

    private function calculateTotal()
    {
        return $this->subtotal + $this->taxAmount;
    }

    private function calculateSubtotal()
    {
        $subtotal = 0;
        foreach ($this->invoiceItems as $key => $items) 
        {
            $subtotal += ($items['total'] ?? 0);
        }
        return $subtotal;
    }
}
