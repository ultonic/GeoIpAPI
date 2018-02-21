<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }
}
