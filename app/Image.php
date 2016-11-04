<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['image', 'content_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
