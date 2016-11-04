<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
	protected $table = 'tblParty';

    protected $fillable = [
    	'name', 'description'
    ];

    public function event() {
    	return $this->belongsToMany('App\Event', 'party_id');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
