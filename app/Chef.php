<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    public function restaurants()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
