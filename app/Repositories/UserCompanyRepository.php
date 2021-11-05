<?php

namespace App\Repositories;

use App\Models\UserCompany;
use App\Repositories\Repository;

class UserCompanyRepository extends Repository
{
    /**
     * Instantiate reporitory
     * 
     * @param  $user
     */
    public function __construct(UserCompany $userCompany)
    {
        $this->model = $userCompany;
    }

  
}