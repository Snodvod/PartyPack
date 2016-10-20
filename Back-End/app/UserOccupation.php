<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserOccupation extends Model
{
	protected $table = "tblUserOccupation";

    protected $fillable= [
    	'user_id', 'occupation_id'
    ];

    public function user() {
    	return $this->belongsToMany('App\User');
    }

    public function occupation() {
    	return $this->belongsToMany('App\Occupation');
    }
}
