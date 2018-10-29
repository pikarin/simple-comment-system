<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/comments', 'CommentController@index');
Route::post('/comments', 'CommentController@store');
Route::put('/comments/{comment}', 'CommentController@update');
Route::delete('/comments/{comment}', 'CommentController@destroy');
