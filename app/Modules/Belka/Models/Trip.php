<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    public function rate()
    {
        return $this->belongsTo('Modules\Belka\Models\Rate');
    }
}
