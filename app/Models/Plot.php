<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Plot extends Model
{
    use HasFactory;

    protected $fillable = ['plot_no', 'project_id', 'status'];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }

    /**
     * Get the project that owns the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id');
    }

    /**
     * Get the sale associated with the Plot
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale(): HasOne
    {
        return $this->hasOne(Sale::class, 'plot_id');
    }
}
