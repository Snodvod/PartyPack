<?php

Auth::routes();

// View routes
Route::get('/artists', 'UserController@showArtists');
Route::resource('concepts', 'PartyController');

Route::get('/', 'HomeController@index');

Route::resource('events', 'EventController');
Route::get('/events/comments/{id}', 'EventController@getComments');
Route::post('/events/comments/{id}', 'EventController@storeComment');


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



	
