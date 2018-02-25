<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    public function rate()
    {
        return $this->belongsTo('Modules\Belka\Models\Rate');
    }
}
