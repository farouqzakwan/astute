<?php

namespace App\Repositories;

use App\Models\UserContact;
use App\Repositories\Repository;

class UserContactRepository extends Repository
{
    protected $model;
    /**
     * Instantiate reporitory
     * 
     * @param  $userContact
     */
    public function __construct(UserContact $userContact)
    {
        $this->model = $userContact;
    }
    
}