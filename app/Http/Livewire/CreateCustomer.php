<?php

namespace App\Http\Livewire;

use App\Models\Images;
use App\Models\UserCustomers;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateCustomer extends Component
{
    use WithFileUploads;

    public $user;
    public $clientName;
    public $roc;
    public $email;
    public $phoneNumber;
    public $photo;
    
    public function updateClientInfo()
    {
        $user_customer = UserCustomers::create([
            'user_id'       => $this->user->id,
            'name'          => $this->clientName,
            'roc'           => $this->roc,
            'email'         => $this->email,
            'phone_number'  => $this->phoneNumber,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()
        ]);
        

        $photo_path = ($this->photo)?$this->photo->store('public/customer/'.$this->user->id.'/'.$user_customer->id):'public/image/icons/image.png';
        Images::updateOrCreate([
            'model_id'      => $this->user->id,
            'model_type'    => UserCompany::class
        ],[
            'location'      => $photo_path,
            'uuid'          => Str::uuid(),
            'storage'       => config('filesystems.default'),
        ]);

        $this->clientName = $this->roc = $this->email = $this->phoneNumber = null;
        $this->dispatchBrowserEvent('notification',[
            'status'    => true,
            'title'     => 'Congratulations!',
            'message'   => 'Successfully adding new customer...'
        ]);
    }

    public function mount()
    {
        $this->user = Auth()->user();
    }
    

    public function render()
    {
        return view('livewire.create-customer');
    }
}
