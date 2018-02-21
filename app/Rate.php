<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function automodel()
    {
        return $this->belongsTo('App\AutoModel', 'auto_model_id');
    }

    public function booking()
    {
        return $this->hasOne('App\Booking');
    }

    public function inspection()
    {
        return $this->hasOne('App\Inspection');
    }

    public function trip()
    {
        return $this->hasOne('App\Trip');
    }

    public function parking()
    {
        return $this->hasOne('App\Parking');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
