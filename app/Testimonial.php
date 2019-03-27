<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    public function restaurants()
    {
        return $this->belongsTo('App\Restaurant');
    }
}
