<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::get('/standard', 'HomeController@standard')->name('standard');
Route::get('/custom', 'HomeController@custom')->name('custom');