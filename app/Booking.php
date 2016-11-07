<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'party_id'];

    public function parties()
    {
        return $this->belongsToMany('App\Party');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
