<?php

Route::get('/', 'HomeController@index')->name('main');
Route::get('/home', 'NoteController@index')->name('home');
Route::post('/notes', 'NoteController@store');
Route::get('/notes/create', 'NoteController@create');
Route::get('/notes/{note}', 'NoteController@show');
Route::patch('/notes/{note}', 'NoteController@update');
Route::delete('/notes/{note}', 'NoteController@destroy');
Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');
