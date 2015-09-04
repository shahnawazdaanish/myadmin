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
    return view('demo');
});

Route::get('/pass', function () {
    return view('password.entrypass');
});

Route::get('passwordstore/entry', 'StorePasswordController@entry');
Route::get('passwordstore/view', 'StorePasswordController@view');
Route::get('passwordstore/edit/{id}', 'StorePasswordController@edit');
Route::get('passwordstore/delete/{id}', 'StorePasswordController@destroy');

Route::post('passwordstore/store', 'StorePasswordController@store');
