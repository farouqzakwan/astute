<?php

namespace App\Http\Livewire\Setting;

use App\Models\UserInvoiceTaxes;
use Carbon\Carbon;
use Livewire\Component;

class CreateTaxRate extends Component
{
    public $rate = 0;
    public $name;
    public $user;

    public function render()
    {
        $this->user = Auth()->user();
        return view('livewire.setting.create-tax-rate');
    }

    public function saveRate()
    {
        UserInvoiceTaxes::create([
            'user_id' => $this->user->id,
            'name' => $this->name,
            'rate' => $this->rate,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $this->dispatchBrowserEvent('notification',[
            'status'    => true,
            'title'     => 'Congratulations!',
            'message'   => 'Successfully adding new tax rate ...'
        ]);
    }
}
