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

Route::get('/', 'HomeController@index');

Route::get('/profile/show/{user}', ('ProfileController@show'));
Route::get('/profile/edit/{user}', ('ProfileController@edit'));
Route::post('/profile/update/{user}', ('ProfileController@update'));

Auth::routes();

