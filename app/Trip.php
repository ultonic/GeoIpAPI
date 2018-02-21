<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }
}
