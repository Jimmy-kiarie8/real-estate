<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'name',
        'total_units',
        'location',
        'other_project_details'
    ];


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }
    public function salesOfficers() {
        return $this->belongsToMany(Saleofficer::class);
    }

}
