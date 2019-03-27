<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function restaurants() {
        $this->belongsTo(App\Restaurant::class);
    }
}
