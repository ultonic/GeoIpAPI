<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;

    public function customers()
    {
        return $this->belongsToMany('Modules\Belka\Models\Customer');
    }

    public function rates()
    {
        return $this->hasMany('Modules\Belka\Models\Rate');
    }
}
