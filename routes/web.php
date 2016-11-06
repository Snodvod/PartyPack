<?php

Auth::routes();

// View routes
Route::resource('artists', 'UserController');
Route::resource('concepts', 'PartyController');
Route::resource('comments', 'CommentController');
Route::get('email', 'MailController@sendInvitation');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
});




	
