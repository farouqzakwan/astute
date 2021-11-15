<?php

namespace App\Http\Livewire;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Images;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserContact;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $username;
    public $dob;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $postcode;
    public $country;
    public $mobile;
    public $user;
    public $avatar;

    public function updateProfile(UpdateProfileRequest $request)
    {
        //update table : user 
            User::where([
                'id'    => $this->user->id
            ])
            ->update([
                'name'  => $this->username,
                'dob'   => $this->dob,
                'updated_at' => Carbon::now()
            ]);

            $image_path = ($this->avatar)?$this->avatar->store('public/photo/'.$this->user->id.'/avatar'):'public/image/icons/image.png';
            
            //store image 
            Images::updateOrCreate([
                'model_id'      => $this->user->id,
                'model_type'    => User::class
            ],[
                'location'      => $image_path,
                'uuid'          => Str::uuid(),
                'storage'       => config('filesystems.default'),
            ]);
            

        //update table : userContact
            if(!empty($this->user->userContact[0]))
            {
                UserContact::where([
                    'id'    => $this->user->userContact[0]->id
                ])
                ->update([
                    'user_id'       => $this->user->id,
                    'phone_code'    => 60,
                    'phone_number'  => $this->mobile,
                    'updated_at'    => Carbon::now(),
                ]);
            }else{
                UserContact::create([
                    'user_id'       => $this->user->id,
                    'phone_code'    => 60,
                    'phone_number'  => $this->mobile,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);
            }

        //update table : userAddress
            if (!empty($this->user->userAddress[0])) 
            {
                UserAddress::where([
                    'id'    => $this->user->userAddress[0]->id
                ])
                ->update([
                    'user_id'   => $this->user->id,
                    'address1'  => $this->address1,
                    'address2'  => $this->address2,
                    'city'      => $this->city,
                    'state'     => $this->state,
                    'postcode'  => $this->postcode,
                    'country'   => $this->country,
                    'updated_at'=> Carbon::now()
                ]);    
            }else{
                UserAddress::create([
                    'user_id'   => $this->user->id,
                    'address1'  => $this->address1,
                    'address2'  => $this->address2,
                    'city'      => $this->city,
                    'state'     => $this->state,
                    'postcode'  => $this->postcode,
                    'country'   => $this->country,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now()
                ]);
            }

            $this->dispatchBrowserEvent('notification',[
                'status'    => true,
                'title'     => 'Congratulations!',
                'message'   => 'Successfully updating your profile...'
            ]);
    }

    public function hydrate()
    {
        $this->user = Auth()->user();
    }

    public function mount()
    {
        $user                   = Auth()->user();
        $this->user             = $user;
        $this->username         = $user->name;
        $this->dob              = $user->dob;
        $this->address1         = $user->userAddress[0]->address1 ?? '';
        $this->address2         = $user->userAddress[0]->address2 ?? '';
        $this->city             = $user->userAddress[0]->city ?? '';
        $this->state            = $user->userAddress[0]->state ?? '';
        $this->postcode         = $user->userAddress[0]->postcode ?? '';
        $this->country          = $user->userAddress[0]->country ?? '';
        $this->mobile           = $user->userContact[0]->phone_number ?? '';
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
