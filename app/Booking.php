<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }
}
