<?php

namespace App\Models;

use App\Models\Tickets\Message;
use App\Models\Tickets\Ticket;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'id_number',
        'pin',
        'nok_details',
        'category_id'
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse(($value))->format('d M Y');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * Get all of the titledeed for the Client
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function titledeed(): HasMany
    {
        return $this->hasMany(Titledeed::class, 'client_id');
    }
}
