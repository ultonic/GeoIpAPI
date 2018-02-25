<?php namespace Modules\Belka\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Modules\Belka\Http\Resources\RateResource;
use Modules\Belka\Http\Resources\RateCollection;
use Modules\Belka\Repositories\Criteria\WithEntity;
use Modules\Belka\Repositories\RateRepository as Rate;

class RatesAPIController extends Controller {

    /**
     * @var Rate
     */
    private $rate;

    public function __construct(Rate $rate) {
        $this->rate = $rate;
        $this->rate->pushCriteria(new WithEntity(['automodel', 'booking', 'inspection', 'trip', 'parking']));

    }

    public function index() {
        return new RateCollection($this->rate->all());
    }

    public function show($id) {
        if (!is_numeric($id))
            return response()->json(['error' => ['code' => 400, 'message' => 'The request data is invalid']], 400);

        return ($rate = $this->rate->find($id)) ? new RateResource($rate) : response()->json(['error' => ['code' => 404, 'message' => 'Resource not found']], 404);

    }
}