<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titledeed extends Model
{
    use HasFactory;

    protected $fillable = ['issuance_date','status','client_id','project_id', 'plot_id'];

    public function client() {
        return $this->belongsTo(Client::class); // or $this->hasOne(Client::class) if one-to-one
    }

}
