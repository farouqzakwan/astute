<?php

namespace App\Repositories;

use App\Models\UserAddress;
use App\Repositories\Repository;

class UserAddressRepository extends Repository
{
    /**
     * Instantiate reporitory
     * 
     * @param  $user
     */
    public function __construct(UserAddress $userAddress)
    {
        $this->model = $userAddress;
    }   

}