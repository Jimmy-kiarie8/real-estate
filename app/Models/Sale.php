<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sale extends Model
{
    use HasFactory;

    protected $fillable  = ['order_no', 'status', 'amount', 'paid_amount', 'plot_id', 'sales_officer_id', 'project_id', 'client_id'];

    /**
     * Get all of the payments for the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class, 'sale_id');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }

    /**
     * Get the plot that owns the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plot(): BelongsTo
    {
        return $this->belongsTo(Plot::class, 'plot_id');
    }

    /**
     * Get the client that owns the Sale
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $number = Sale::max('id') + 1;
            $model->order_no = make_reference_id('ORD', $number);
        });
    }
}
