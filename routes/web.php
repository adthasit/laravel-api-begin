<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('search', 'CarController@index');

Route::get('cars/{id}', 'CarController@show');

Route::post('car', 'CarController@store');

Route::put('car/{id}', 'CarController@update');

Route::delete('question/{id}', 'CarController@destroy');

 
