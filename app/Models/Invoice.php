<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['payment_date', 'payment_mode', 'item', 'amount_paid', 'sale_id', 'client_id', 'invoice_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Get all of the payments for the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'invoice_id');
    }
}
