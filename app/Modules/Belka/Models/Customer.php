<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function groups()
    {
        return $this->belongsToMany('Modules\Belka\Models\Group');
    }

    public function orders()
    {
        return $this->hasMany('Modules\Belka\Models\Order');
    }
}
