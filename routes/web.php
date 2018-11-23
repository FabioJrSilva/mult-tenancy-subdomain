<?php

Route::view('tenant-404', 'errors.404-tenant')->name('tenant.404');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
