<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public function times()
    {
        return $this->hasMany('App\Time');
    }

    public function menus()
    {
        return $this->hasOne('App\Menu');
    }

    public function testimonials()
    {
        return $this->hasMany('App\Testimonial');
    }

    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function chefs()
    {
        return $this->hasMany('App\Chef');
    }
}
