<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\App;

class LoginService
{
    protected $userRepository;

    function __construct()
    {
        $this->userRepository = App::make(UserRepository::class);    
    }

    public function login($email,$password)
    {
        return $this->userRepository->authenticate($email,$password);
    }

    public function generateToken(User $user,$tokenName)
    {
        return $user->createToken($tokenName);
    }
}