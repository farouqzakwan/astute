<?php

namespace App\Http\Livewire\Invoices;

use App\Models\UserInvoiceTaxes;
use Livewire\Component;

class ItemListsForm extends Component
{
    public $invoiceItems = [
        [
            'item'          => null,
            'description'   => null,
            'price'         => 0,
            'quantity'      => 0,
            'total'         => 0,
        ]
    ];
    public $total = 0;
    public $taxes;
    public $user;
    public $subtotal = 0.00;
    public $selectedTax = 0;

    public function updatedInvoiceItems()
    {
       try {
            foreach ($this->invoiceItems as $key => $item) 
            {
                $this->invoiceItems[$key]['total'] = (is_numeric($this->invoiceItems[$key]['price'])? $this->invoiceItems[$key]['price'] :0) * (is_numeric($this->invoiceItems[$key]['quantity'])? $this->invoiceItems[$key]['quantity']:0);
            }
            $this->calculate_tax();
            $this->emit('updatedItems',$this->invoiceItems);
            $this->emit('selectedTax',$this->taxes[$this->selectedTax]?$this->taxes[$this->selectedTax]:$this->taxes[0]);
            $this->emit('taxAmount',$this->subtotal);
       } catch (\Throwable $th) {
            report($th);
       }
    }

    public function updatedSelectedTax()
    {
        try {
            $this->calculate_tax();
            $this->emit('selectedTax',$this->taxes[$this->selectedTax]?$this->taxes[$this->selectedTax]:$this->taxes[0]);
            $this->emit('taxAmount',$this->subtotal);
        } catch (\Throwable $th) {
            report($th);
        }
    }

    public function render()
    {
       try {
            $this->user = Auth()->user();
            $this->taxes = UserInvoiceTaxes::where('user_id',$this->user->id)->get();
            return view('livewire.invoices.item-lists-form');
       } catch (\Throwable $th) {
            report($th);
       }
    }

    public function addItem()
    {
        try {
            array_push($this->invoiceItems,[
                'item'              => null,
                'description'       => null,
                'price'             => 0,
                'quantity'          => 0,
                'total'             => 0,
            ]);
        } catch (\Throwable $th) {
            report($th);
        }   
    } 
    
    private function calculate_tax()
    {
        try {
            $tax_rate = !empty($this->taxes[$this->selectedTax]->rate)?$this->taxes[$this->selectedTax]->rate / 100:0;
            $subtotal = 0;
            foreach ($this->invoiceItems as $key => $item) 
            {
                $subtotal += $this->invoiceItems[$key]['total'];
            }
            $this->subtotal = $tax_rate * $subtotal;
        } catch (\Throwable $th) {
            report($th);
        }
    }
}
