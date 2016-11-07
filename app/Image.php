<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['image', 'imageable_id', 'imageable_type', 'content_id'];

    public function imageable()
    {
        return $this->morphTo();
    }
}
