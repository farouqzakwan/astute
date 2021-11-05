<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{
    /**
     * Instantiate reporitory
     * 
     * @param  $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    
    /**
     * Authenticating user 
     * 
     * @param $email
     * @param  $password
     * @return User $user
     */
    public function authenticate($email,$password)
    {
        $login_user = $this->model->where('email',$email)->first();
        if(!$login_user) return false;
        if(Hash::check($password, $login_user->password))
        {
            return $login_user;
        }
        return false;
    }
}