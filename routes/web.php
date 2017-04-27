<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function () {
    //use this router instead to make it efficience
    Route::resource('car', 'CarController');
});




