<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api.rates')->get('/getRate', function (Request $request) {
    try {
        if ($rate = App\Rate::with('automodel', 'booking', 'inspection', 'parking', 'trip')->find($request->get('id'))) {

            dd(json_decode($rate->toJson()));

        } else {
            print json_encode(['error' => 0, 'code' => '404', 'message' => 'Результат не найден']);
        }
    } catch (Exception $e) {
        print json_encode(['error' => 1, 'code' => $e->getCode(), 'message' => $e->getMessage()]);
    }

});
