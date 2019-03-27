<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function restaurants()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
