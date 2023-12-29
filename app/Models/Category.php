<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','is_visible'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }

    protected static function boot()
    {
        parent::boot();
            static::creating(function ($model) {
                $number = Category::max('id') + 1;
                $model->code = make_reference_id('CAT', $number);
        });
    }
}
