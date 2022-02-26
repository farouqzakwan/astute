<?php
namespace App\Repositories;

use App\Models\UserInvoiceTaxes;
use App\Repositories\Repository;

class UserInvoiceTaxesRepository extends Repository
{
     /**
     * Instantiate reporitory
     * 
     * @param  $userInvoiceTaxes
     */

    function __construct(UserInvoiceTaxes $userInvoiceTaxes)
    {
        $this->model = $userInvoiceTaxes;
    }    
}
