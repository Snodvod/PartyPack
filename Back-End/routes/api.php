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


Route::resource('/event', 'EventController');
Route::get('/event/comments/{id}', 'EventController@getComments');

// User routes

Route::resource('/user', 'UserController');
Route::get('/user/occupations/{id}', 'UserController@getOccupations');
Route::get('/user/type/{id}', 'UserController@getType');

// Type routes
Route::get('/type', 'TypeController@index');
Route::get('type/users/{id}', 'TypeController@getUsers');

// Occupation
Route::resource('/occupation', 'OccupationController');
Route::get('/occupation/users/{id}', 'OccupationController@getUsers');
