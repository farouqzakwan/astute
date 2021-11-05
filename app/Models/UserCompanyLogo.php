<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCompanyLogo extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_company_logo';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * Get the user_company that owns the UserCompanyLogo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_company()
    {
        return $this->belongsTo(UserCompany::class, 'user_company_id', 'id');
    }
}
