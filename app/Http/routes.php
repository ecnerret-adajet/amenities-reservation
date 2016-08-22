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
    return view('auth.login');
});

Route::get('dashboard','PagesController@dashboard');
Route::get('profile','UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::auth();
Route::resource('owners','OwnersController');
Route::resource('tenants','TenantsController');
Route::resource('rooms','RoomsController');
Route::resource('amenities','AmenitiesController');


Route::get('/home', 'HomeController@index');
