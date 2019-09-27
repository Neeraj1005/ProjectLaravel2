<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('joins','JoinsController@joinsdb');

//for getting database record Route::get('query','DbQueryController@index');
//for delete records Route::get('query','DbQueryController@deletedb');
//for insert data Route::get('query','DbQueryController@insertdb');
//for update Route::get('query','DbQueryController@updatedb');

Route::get('/home', 'HomeController@index')->name('home');
