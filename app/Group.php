<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }

    public function rates()
    {
        return $this->hasMany('App\Rate');
    }
}
