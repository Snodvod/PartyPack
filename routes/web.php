<?php

Auth::routes();

// View routes
Route::resource('artists', 'UserController');
Route::get('artists/{id}/comments', 'UserController@showComments');
Route::resource('concepts', 'PartyController');
Route::get('concepts/{id}/comments', 'PartyController@showComments');
Route::resource('comments', 'CommentController');
Route::get('email', 'MailController@sendInvitation');

Route::get('/', 'HomeController@index')->name('home');




	
