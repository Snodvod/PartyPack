<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = "tblMail";

    protected $fillable = [
        'secret', 'user_id'
    ];

    public function user() {
        return $this->hasMany('App\User');
    }
}
