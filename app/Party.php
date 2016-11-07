<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
	protected $table = 'tblParty';

    protected $fillable = [
    	'name', 'description'
    ];

    public function users() {
    	return $this->belongsToMany('App\User', 'tblUserParty', 'party_id', 'user_id');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function bookings()
    {
        return $this->belongsToMany('App\User', 'bookings');
    }
}
