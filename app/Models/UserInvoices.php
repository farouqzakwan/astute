<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserInvoices extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'user_invoices';

    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];

    /**
     * Get the user that owns the UserInvoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the user_invoice_seller associated with the UserInvoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_invoice_seller()
    {
        return $this->hasOne(UserInvoiceSellers::class, 'user_invoice_id', 'id');
    }

    /**
     * Get the user_invoice_buyer associated with the UserInvoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user_invoice_buyer()
    {
        return $this->hasOne(UserInvoiceBuyers::class, 'user_invoice_id', 'id');
    }

    /**
     * Get all of the user_invoice_items for the UserInvoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_invoice_items()
    {
        return $this->hasMany(UserInvoiceItems::class, 'invoice_id', 'id');
    }

    /**
     * Get the currency associated with the UserInvoices
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function currency()
    {
        return $this->hasOne(Currencies::class, 'id', 'currency_id');
    }
}