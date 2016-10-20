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


Route::resource('events', 'EventController');
Route::get('/events/comments/{id}', 'EventController@getComments');

// User routes
Route::resource('users', 'UserController');
Route::get('/users/occupations/{id}', 'UserController@getOccupations');
Route::get('/users/type/{id}', 'UserController@getType');
Route::get('users/events/{id}', 'UserController@getEvents');

// Type routes
Route::get('/types', 'TypeController@index');
Route::get('types/users/{id}', 'TypeController@getUsers');

// Occupation
Route::resource('occupations', 'OccupationController');
Route::get('/occupations/users/{id}', 'OccupationController@getUsers');
