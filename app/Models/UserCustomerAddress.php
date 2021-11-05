<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCustomerAddress extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_customer_address';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * Get the userCustomerAddress that owns the UserCustomerAddress
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userCustomerAddress()
    {
        return $this->belongsTo(UserCustomerAddress::class, 'user_customer_id', 'id');
    }
}
