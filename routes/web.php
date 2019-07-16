<?php

//Frontend Routes...
Route::get('/','HomeController@index');







//Backend Routes...
Route::get('/backend', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
