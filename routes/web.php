<?php

Auth::routes();

// View routes
Route::resource('artists', 'UserController');
Route::resource('concepts', 'PartyController');

Route::get('/', 'HomeController@index')->name('home');




	
