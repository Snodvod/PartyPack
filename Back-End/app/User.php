<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'tblUser';

    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'type_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];

    public function events() {
        return $this->belongsToMany('App\Event', 'tblUserEvent', 'user_id', 'event_id');
    }

    public function occupations() {
        return $this->belongsToMany('App\Occupation', 'tblUserOccupation', 'user_id', 'occupation_id');
    }

    public function type() {
        return $this->belongsTo('App\Type');
    }
}
