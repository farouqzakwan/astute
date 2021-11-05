<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompany extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_companies';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    
    /**
     * Get the user that owns the UserCompany
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the user_company_logo associated with the UserCompany
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function UserCompanyLogo()
    {
        return $this->hasOne(UserCompanyLogo::class, 'user_company_id', 'id');
    }
}
