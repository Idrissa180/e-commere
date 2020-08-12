<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function Post()
    {
        return $this->belongsTo('App\Post');
    }
}
