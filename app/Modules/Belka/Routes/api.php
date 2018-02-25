<?php

Route::resource('rates', 'RatesAPIController', ['only' => [
    'index', 'show'
]]);

