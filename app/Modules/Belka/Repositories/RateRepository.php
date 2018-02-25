<?php namespace Modules\Belka\Repositories;

use App\Repositories\Eloquent\Repository;

class RateRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'Modules\Belka\Models\Rate';
    }
}


