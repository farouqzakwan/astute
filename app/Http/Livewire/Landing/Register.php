<?php

namespace App\Http\Livewire\Landing;

use App\Services\RegisterService;
use Livewire\Component;

class Register extends Component
{
    public $companyName;
    public $email;
    public $password;

    protected $rules = [
        'companyName'   => 'required|string',
        'email'         => 'required|string|email|unique:users,email',
        // 'email'         => 'required|string|email|email:rfc,dns|unique:users,email',
        'password'      => 'required|string'
    ];

    public function render()
    {
        return view('livewire.landing.register');
    }

    public function createAccount()
    {
        $this->validate();
        //register service
        $registerService = new RegisterService();
        $register = $registerService->register([
            'companyName'   => $this->companyName,
            'email'         => $this->email,
            'password'      => $this->password
        ]);
    
        return redirect()->route('login');
    }
}
