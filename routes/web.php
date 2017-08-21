<?php

Auth::routes();

// View routes
Route::resource('artists', 'UserController');
Route::get('user/{id}/activate', 'UserController@activateAccount');
Route::get('artists/{id}/comments', 'UserController@showComments');
Route::resource('concepts', 'PartyController');
Route::resource('comments', 'CommentController');
Route::post('email/{user}', 'MailController@sendInvitation');
Route::resource('bookings', 'BookingController');
Route::get('bookings/create', 'BookingController@create');
Route::get('/roleform', 'AdminController@changeRoleForm');
Route::post('/changerole/{id}', 'AdminController@changeRole');

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
});




	
