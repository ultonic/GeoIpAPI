<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $timestamps = false;

    public function model()
    {
        return $this->belongsTo('Modules\Belka\Models\AutoModel');
    }

    public function orders()
    {
        return $this->hasMany('Modules\Belka\Models\Order');
    }
}
