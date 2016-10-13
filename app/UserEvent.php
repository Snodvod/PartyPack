<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
	protected $table = "tblUserEvent";

    protected $fillable= [
    	'user_id', 'event_id'
    ];

    public function user() {
    	return $this->belongsToMany('App\User');
    }

    public function event() {
    	return $this->belongsToMany('App\Event');
    }
}
