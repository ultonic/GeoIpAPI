<?php

Route::group(['middleware' => 'web', 'prefix' => 'belka', 'namespace' => 'Modules\Belka\Http\Controllers'], function()
{
    Route::get('/', 'BelkaController@index');
});
