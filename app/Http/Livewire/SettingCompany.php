<?php

namespace App\Http\Livewire;

use App\Models\Images;
use App\Models\UserCompany;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingCompany extends Component
{
    use WithFileUploads;

    public $companyName;
    public $companyLogo;
    public $roc;
    public $address;
    public $address2;
    public $city;
    public $state;
    public $postcode;
    public $country;
    public $user;

    public function updateProfile()
    {
        $userCompany = UserCompany::updateOrCreate([
            'user_id'   => $this->user->id
        ],[
            'company_name'  => $this->companyName,
            'roc'           => $this->roc,
            'address1'      => $this->address,
            'address2'      => $this->address2,
            'city'          => $this->city,
            'state'         => $this->state,
            'postcode'      => $this->postcode,
            'country'       => $this->country,
            'updated_at'    => Carbon::now()
        ]);

        $location = ($this->companyLogo)?$this->companyLogo->store('public/photo/'.$this->user->id.'/company/'.$userCompany->id):'public/image/icons/image.png';
        
        //store image 
        Images::updateOrCreate([
            'model_id'      => $this->user->id,
            'model_type'    => UserCompany::class
        ],[
            'location'      => $location,
            'uuid'          => Str::uuid(),
            'storage'       => config('filesystems.default'),
        ]);

        $this->dispatchBrowserEvent('notification',[
            'status'    => true,
            'title'     => 'Congratulations!',
            'message'   => 'Successfully updating your company profile...'
        ]);
    }

    public function hydrate()
    {
        $this->user = Auth()->user();
    }

    public function mount()
    {
        $this->user = Auth()->user();
        $this->companyName = $this->user->main_company->company_name;
        $this->roc = $this->user->main_company->roc;
        $this->address = $this->user->main_company->address_1;
        $this->address2 = $this->user->main_company->address_2;
        $this->city = $this->user->main_company->city;
        $this->state = $this->user->main_company->state;
        $this->postcode = $this->user->main_company->postcode;
        $this->country = $this->user->main_company->country;
    }

    public function render()
    {
        return view('livewire.setting-company');
    }
}
