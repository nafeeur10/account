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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/clienthome', 'ClientController@index');
Route::get('client', 'ClientController@index');
Route::get('client/create', 'ClientController@create')->name('client');
Route::post('client/create', 'ClientController@store');
