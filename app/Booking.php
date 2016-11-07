<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'party_id'];

    public function party()
    {
        return $this->belongsTo('App\Party');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
