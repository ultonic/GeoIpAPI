<?php

namespace Modules\Belka\Models;

use Illuminate\Database\Eloquent\Model;

class AutoModel extends Model
{
    public $timestamps = false;

    public function cars()
    {
        return $this->hasMany('Modules\Belka\Models\Car');
    }

    public function rates()
    {
        return $this->hasMany('Modules\Belka\Models\Rate');
    }
}
