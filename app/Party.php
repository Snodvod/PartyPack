<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
    	'type'
    ];

    public function event() {
    	return $this->belongsToMany('App\Event');
    }
}