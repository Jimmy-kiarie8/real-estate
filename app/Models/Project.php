<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get all of the sales for the Project
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plots(): HasMany
    {
        return $this->hasMany(Plot::class, 'project_id');
    }

}
