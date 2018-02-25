<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function rate()
    {
        return $this->belongsTo('Modules\Belka\Models\Rate');
    }

    public function time_period()
    {
        return $this->belongsTo('Modules\Belka\Models\TimePeriod', 'night_period_id');
    }
}
