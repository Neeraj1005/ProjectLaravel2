<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/db','DbModelController@index');

Route::get('/home', 'HomeController@index')->name('home');
