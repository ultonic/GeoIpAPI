<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function car()
    {
        return $this->belongsTo('Modules\Belka\Models\Car');
    }

    public function customer()
    {
        return $this->belongsTo('Modules\Belka\Models\Customer');
    }

    public function rate()
    {
        return $this->belongsTo('Modules\Belka\Models\Rate');
    }
}
