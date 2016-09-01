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

// pages routes
Route::get('/about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

//journals routes
Route::get('journals', [
    'as' => 'journals',
    'uses' => 'EntriesController@index'
]);
Route::get('journals/create', 'EntriesController@create');
Route::get('journals/{id}', 'EntriesController@show');
Route::post('journals', 'EntriesController@store');

//// Authentication routes...
//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
//
//// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::auth();




