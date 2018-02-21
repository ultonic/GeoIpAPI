<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    public $timestamps = false;

    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    public function rates()
    {
        return $this->hasMany('App\Rate');
    }
}
