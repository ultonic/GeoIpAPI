<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
