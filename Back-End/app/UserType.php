<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
	protected $table = 'tblUserType';

    protected $fillable = [
    	'name', 'description'
    ];

    public function user() {
    	return $this->belongsToMany('App\User', 'type_id');
    }
}
