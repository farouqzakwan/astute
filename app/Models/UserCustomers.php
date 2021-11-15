<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCustomers extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_customers';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * Get all of the userCustomerAddress for the UserCustomers
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userCustomerAddress()
    {
        return $this->hasMany(UserCustomerAddress::class, 'user_customer_id', 'id');
    }

    /**
     * Get the user that owns the UserCustomers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

   public function image()
   {
        return $this->morphOne(Images::class,'model');
   }
}
