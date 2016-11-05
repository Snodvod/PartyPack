<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'tblEvent';

    protected $fillable = [
        'date', 'location', 'price', 'party_id', 'comment_id'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User', 'tblUserEvent', 'event_id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function images()    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
