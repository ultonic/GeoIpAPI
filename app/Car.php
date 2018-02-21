<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    public function model()
    {
        return $this->belongsTo('App\AutoModel');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
