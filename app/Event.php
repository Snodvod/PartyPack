<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'date', 'location', 'price'
    ];

    public function users() {
    	return $this->belongsToMany('App\User');
    }
}