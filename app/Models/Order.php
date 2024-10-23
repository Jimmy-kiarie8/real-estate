<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_no', 'client_id', 'lat', 'lng', 'amount', 'discount', 'location_id', 'paid', 'status', 'delivery_status','customer_notes', 'notes', 'shipping_charges','delivery_date', 'delivered_on', 'returned_on','payment_code', 'platform', 'recall_date', 'distance',
    ];

    /**
     * The products that belong to the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products')
            ->withPivot(['quantity', 'price']); // Customize pivot columns as needed
    }

    /**
     * Get the client that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }
    /**
     * Get the client that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function getCreatedAtAttribute($value) {
        return Carbon::parse(($value))->format('d M Y H:i');
    }


    protected static function boot()
    {
        parent::boot();
            static::creating(function ($model) {
                $number = Order::max('id') + 1;
                $model->order_no = make_reference_id('ORD', $number);
        });
    }
}
