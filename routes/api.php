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

Route::middleware('api.check')->get('/ip2geo', 'GeoIpController@getData');

Route::get('/getRate', function (Request $request) {
    $rate = App\Rate::with('booking', 'inspection', 'parking', 'trip')->find(1)->toJson();

    dd(json_decode($rate));
});
