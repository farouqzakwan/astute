<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCustomerLogo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_customer_logo';
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * Get the user_customer that owns the UserCustomerLogo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_customer()
    {
        return $this->belongsTo(UserCustomers::class, 'user_customer_id', 'id');
    }
}
