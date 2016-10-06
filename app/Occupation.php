<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $fillable = [
    	'type', 'description'
    ];

    public function occupations() {
    	return $this->belongsToMany('App\User');
    }
}
