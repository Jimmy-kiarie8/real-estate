<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;



    protected static function boot()
    {
        parent::boot();
            static::creating(function ($model) {
                $number = Category::max('id') + 1;
                $model->code = make_reference_id('CAT', $number);
        });
    }
}
