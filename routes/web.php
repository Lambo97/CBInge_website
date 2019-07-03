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
Route::get('/profile/edit/{user}', ('ProfileController@edit'))->middleware(['auth', 'approved']);
Route::post('/profile/update/{user}', ('ProfileController@update'))->middleware(['auth', 'approved']);
Route::get('/profile/destroy/{user}', ('ProfileController@destroy'))->middleware(['auth', 'admin']);
Route::get('/profile/approve/{user}', ('ProfileController@approve'))->middleware(['auth', 'admin']);
Route::get('/profile/newusers', ('ProfileController@newusers'))->middleware(['auth', 'admin']);

Auth::routes();

