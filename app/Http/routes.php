<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('get_parameters','ParametersController@get');
Route::post('save_parameters','ParametersController@save');

Route::get('additem','ItemsController@add');
//Route::post('additem','ItemsController@save');


