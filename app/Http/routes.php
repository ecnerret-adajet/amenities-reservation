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
Route::auth();

Route::group(['middleware' => ['auth']], function() {


Route::resource('users','UserController');
Route::get('dashboard','PagesController@dashboard');
Route::get('profile','UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]); 


Route::resource('owners','OwnersController');
Route::post('owners/disable/{id}','OwnersController@disable');


Route::resource('tenants','TenantsController');
Route::post('tenants/disable/{id}', 'TenantsController@disable');



Route::resource('rooms','RoomsController');
Route::resource('amenities','AmenitiesController');

Route::get('reports','HomeController@reports');
Route::get('/report', 'HomeController@getreport');


Route::resource('grants', 'GrantsController', ['except' => [
 			 'store',
]]);
Route::get('logs','GrantsController@logs');
Route::post('grants/{id}','GrantsController@store');

/**
 * route reservation setup
 */
Route::resource('reservations','ReservationsController');
/**
 * route setup for building 
 */
Route::resource('buildings','BuildingsController');



});