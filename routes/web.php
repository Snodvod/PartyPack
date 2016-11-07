<?php

Auth::routes();

// View routes
Route::resource('artists', 'UserController');
Route::get('artists/{id}/comments', 'UserController@showComments');
Route::resource('concepts', 'PartyController');
Route::resource('comments', 'CommentController');
Route::get('email/{user}', 'MailController@sendInvitation');
Route::resource('booking', 'BookingController');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
});




	
