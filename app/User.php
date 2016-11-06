<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tblUser';

    protected $fillable = [
        'name', 'email', 'password', 'type_id', 'bio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function parties()
    {
        return $this->belongsToMany('App\Event', 'tblUserParty', 'user_id', 'party_id');
    }

    public function occupations()
    {
        return $this->belongsToMany('App\Occupation', 'tblUserOccupation', 'user_id', 'occupation_id');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function mail()
    {
        return $this->belongsTo('App\Mail');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }
}
