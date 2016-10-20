<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'tblType';

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
