<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    public function group()
    {
        return $this->belongsTo('Modules\Belka\Models\Group');
    }

    public function automodel()
    {
        return $this->belongsTo('Modules\Belka\Models\AutoModel', 'auto_model_id');
    }

    public function booking()
    {
        return $this->hasOne('Modules\Belka\Models\Booking');
    }

    public function inspection()
    {
        return $this->hasOne('Modules\Belka\Models\Inspection');
    }

    public function trip()
    {
        return $this->hasOne('Modules\Belka\Models\Trip');
    }

    public function parking()
    {
        return $this->hasOne('Modules\Belka\Models\Parking');
    }

    public function orders()
    {
        return $this->hasMany('Modules\Belka\Models\Order');
    }
}
