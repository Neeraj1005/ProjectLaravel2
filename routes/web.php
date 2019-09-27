<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/db','DbModelController@index');

//for paginate
//Route::get('paginate','CompaniesController@index');

Route::get('list','BladeController@index');

Route::get('/home', 'HomeController@index')->name('home');
