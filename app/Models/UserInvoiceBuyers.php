<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInvoiceBuyers extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_invoice_buyers';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
    
    /**
     * Get the user_invoice that owns the UserInvoiceBuyers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user_invoice()
    {
        return $this->belongsTo(UserInvoices::class, 'user_invoice_id', 'id');
    }
}
