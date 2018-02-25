<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class TimePeriod extends Model
{
    public $timestamps = false;

    public function booking()
    {
        return $this->hasOne('Modules\Belka\Models\Booking');
    }

    public function parking()
    {
        return $this->hasOne('Modules\Belka\Models\Parking');
    }
}
