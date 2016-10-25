<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
	protected $table = "tblOccupation";

    protected $fillable = [
    	'type', 'description'
    ];

    public function users() {
        return $this->belongsToMany('App\User', 'tblUserOccupation', 'occupation_id', 'user_id');
    }
}
