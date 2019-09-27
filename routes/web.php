<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('user','user');


Route::get('/home', 'HomeController@index')->name('home');
