<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = "tblMail";

    protected $fillable = [
        "secret"
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
