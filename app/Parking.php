<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }
}
