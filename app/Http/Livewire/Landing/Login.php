<?php

namespace App\Http\Livewire\Landing;

use App\Services\LoginService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email'         => 'required|string|email',
        'password'      => 'required|string'
    ];

    public function signIn()
    {
        $this->validate();
        $loginService = new LoginService();
        $logonUser  = $loginService->login($this->email,$this->password);
        //create login token first then redirect user to admin page 
        if(!$logonUser)
        {
            return redirect()->back();
        }
        $token = $loginService->generateToken($logonUser,'login');
        Auth::login($logonUser,true);
        return redirect()->route('dashboard.index');
    }

    public function render()
    {
        return view('livewire.landing.login');
    }
}
