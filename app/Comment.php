<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = "tblComment";

    protected $fillable = [
    	'description', 'rating'
    ];

    public function party() {
    	return $this->belongsTo('App\Party');
    }
}
