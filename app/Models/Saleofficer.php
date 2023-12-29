<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saleofficer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'pin'];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
