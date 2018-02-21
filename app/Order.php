<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function car()
    {
        return $this->belongsTo('App\Car');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function rate()
    {
        return $this->belongsTo('App\Rate');
    }
}
