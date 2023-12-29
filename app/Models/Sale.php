<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable  = ['order_no', 'status', 'amount', 'paid_amount', 'plot_id', 'sales_officer_id', 'project_id'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $number = Sale::max('id') + 1;
            $model->order_no = make_reference_id('ORD', $number);
        });
    }
}
