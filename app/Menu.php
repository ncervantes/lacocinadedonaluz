<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function restaurants()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
