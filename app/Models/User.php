<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'main_company'
    ];

    /**
     * Get all of the userAddress for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userAddress()
    {
        return $this->hasMany(UserAddress::class, 'user_id', 'id');
    }

    /**
     * Get all of the userCompany for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userCompany()
    {
        return $this->hasMany(UserCompany::class, 'user_id', 'id');
    }

    /**
     * Get all of the userContact for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userContact()
    {
        return $this->hasMany(UserContact::class, 'user_id', 'id');
    }

    /**
     * Get all of the userCustomers for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userCustomers()
    {
        return $this->hasMany(UserCustomers::class, 'user_id', 'id');
    }

    /**
     * Get all of the userInvoices for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userInvoices()
    {    
        return $this->hasMany(UserInvoices::class, 'user_id', 'id');
    }

    /**
     * Get all of the userInvoiceTaxes for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userInvoiceTaxes()
    {
        return $this->hasMany(UserInvoiceTaxes::class, 'user_id', 'id');
    }

    public function image()
    {
        return $this->morphOne(Images::class,'model');
    }

    public function getMainCompanyAttribute()
    {
        $userCompany = $this->userCompany()->first();
        return (object)[
            'user_company_id'   => $userCompany->id ?? null,
            'company_name'      => $userCompany->company_name ?? null,
            'incorp_date'       => $userCompany->incorp_date ?? null,
            'roc'               => $userCompany->roc ?? null,
            'address_1'         => $userCompany->address1 ?? null,
            'address_2'         => $userCompany->address2 ?? null,
            'city'              => $userCompany->city ?? null,
            'state'             => $userCompany->state ?? null,
            'postcode'          => $userCompany->postcode ?? null,
            'country'           => $userCompany->country ?? null,
            'company_logo'      => str_replace('public/','storage/',$userCompany->image->location) ?? 'image/icons/image.png',
            'storage'           => $userCompany->image->storage ?? 'local',
        ];
    }
}
