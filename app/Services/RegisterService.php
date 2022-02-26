<?php

namespace App\Services;

use App\Jobs\SendVerificationEmail;
use App\Repositories\UserCompanyRepository;
use App\Repositories\UserInvoiceTaxesRepository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    /***
     * Company Name Used To Signup for the Application
     */
    protected $companyName;

    /**
     * Email Used to Signup for the Application
     */
    protected $email;

    /**
     * Password Used to Signup for the Application
     */
    protected $password;

    protected $userRepository;
    protected $userCompanyRepository;
    protected $userInvoiceTaxesRepository;

    function __construct()
    {
        $this->userRepository = App::make(UserRepository::class);
        $this->userCompanyRepository = App::make(UserCompanyRepository::class);
        $this->userInvoiceTaxesRepository = App::make(UserInvoiceTaxesRepository::class);
    }   

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Register a new accounts
     */
    public function register($register = array())
    {
        try {
            if(!empty($register['companyName'])) $this->setCompanyName($register['companyName']);
            if(!empty($register['email'])) $this->setEmail($register['email']);
            if(!empty($register['password'])) $this->setPassword($register['password']);

            //create new user 
            $user = $this->userRepository->create([
                'name'          => null,
                'email'         => $this->email,
                'password'      => Hash::make($this->password),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);

            //create new user companies
            if($user)
            {
                //create job to create userCompanyRepository
                $userCompany = $this->userCompanyRepository->create([
                    'user_id'       => $user->id,
                    'company_name'  => $this->companyName,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ]);

                //create job to create default tax rate
                //why this part of the  code is not running ??
                $defaultTaxRates = config('default.register.user_invoice_taxes');
                foreach($defaultTaxRates as $defaultTaxRate)    
                {
                    $this->userInvoiceTaxesRepository->create([
                        'user_id'   => $user->id,
                        'name'      => $defaultTaxRate['name'],
                        'rate'      => $defaultTaxRate['rate'],
                        'created_at'=> Carbon::now(),
                        'updated_at'=> Carbon::now(),
                    ]);
                }
                
                //create job to send verification emails
                SendVerificationEmail::dispatch($user);
            }
            return $user;
        } catch (\Throwable $th) {
            report($th);
        }
        return false;
    }        


}