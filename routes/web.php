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

/*
| Route concernant la page d'accueil
*/ 
Route::get('/', 'HomeController@index');
Route::post('/contact', 'HomeController@contact');

/*
| Route concernant l'authentification
*/ 
Auth::routes();

/*
| Route concernant l'éditage du profil
*/ 
Route::get('/profile/show/{user}', ('ProfileController@show'));
Route::get('/profile/edit/{user}', ('ProfileController@edit'))->middleware(['auth', 'approved']);
Route::post('/profile/update/{user}', ('ProfileController@update'))->middleware(['auth', 'approved']);
Route::get('/profile/destroy/{user}', ('ProfileController@destroy'))->middleware(['auth', 'admin']);
Route::get('/profile/approve/{user}', ('ProfileController@approve'))->middleware(['auth', 'admin']);
Route::get('/profile/newusers', ('ProfileController@newusers'))->middleware(['auth', 'admin']);
Route::get('/profile/editParrain', ('ProfileController@editParrain'))->middleware(['auth', 'approved']);
Route::get('/profile/addParrain/{parrain}', ('ProfileController@addParrain'))->middleware(['auth', 'approved']);
Route::get('/profile/removeParrain/{parrain}', ('ProfileController@removeParrain'))->middleware(['auth', 'approved']);
Route::get('/profile/editBleu', ('ProfileController@editBleu'))->middleware(['auth', 'approved']);
Route::get('/profile/addBleu/{bleu}', ('ProfileController@addBleu'))->middleware(['auth', 'approved']);
Route::get('/profile/removeBleu/{bleu}', ('ProfileController@removeBleu'))->middleware(['auth', 'approved']);
Route::get('/profile/{user}/image', ('ProfileController@image'));

/*
| Route concernant l'agenda
*/ 
Route::get('events', 'EventController@index')->name('events.index');
Route::post('events', 'EventController@addEvent')->name('events.add');

/*
| Route concernant le forum
*/ 
Route::get('/forum', ('PostForumController@index'))->middleware(['auth', 'comite']);
Route::post('/forum/add', 'PostForumController@add')->middleware(['auth', 'comite']);
Route::get('/forum/edit/{post}', 'PostForumController@edit')->middleware(['auth', 'comite']);
Route::post('/forum/update/{post}', 'PostForumController@update')->middleware(['auth', 'comite']);
Route::get('/forum/destroy/{post}', 'PostForumController@destroy')->middleware(['auth', 'comite']);
Route::get('/forum/ancre/{post}', 'PostForumController@ancre')->middleware(['auth', 'bureau']);
Route::post('/forum/comment/add/{post}', 'CommentForumController@add')->middleware(['auth', 'comite']);
Route::get('/forum/comment/edit/{comment}', 'CommentForumController@edit')->middleware(['auth', 'comite']);
Route::post('/forum/comment/update/{comment}', 'CommentForumController@update')->middleware(['auth', 'comite']);
Route::get('/forum/comment/destroy/{comment}', 'CommentForumController@destroy')->middleware(['auth', 'comite']);
Route::get('/forum/like/{post}', 'PostForumController@like')->middleware(['auth', 'comite']);
Route::get('/forum/dislike/{post}', 'PostForumController@dislike')->middleware(['auth', 'comite']);
Route::get('/forum/comment/like/{comment}', 'CommentForumController@like')->middleware(['auth', 'comite']);
Route::get('/forum/comment/dislike/{comment}', 'CommentForumController@dislike')->middleware(['auth', 'comite']);
Route::get('/forum/image/{url}', 'PostForumController@image')->middleware(['auth', 'comite']);

/*
| Route concernant les pv's du comité
*/
Route::get('/pvcomite', ('PvComiteController@index'))->middleware(['auth', 'comite']);
Route::get('/pvcomite/show/{pv}', ('PvComiteController@show'))->middleware(['auth', 'comite']);
Route::get('/pvcomite/add', 'PvComiteController@add')->middleware(['auth', 'comite']);
Route::post('/pvcomite/add', 'PvComiteController@store')->middleware(['auth', 'comite']);
Route::get('/pvcomite/edit/{pv}', 'PvComiteController@edit')->middleware(['auth', 'comite']);
Route::post('/pvcomite/update/{pv}', 'PvComiteController@update')->middleware(['auth', 'comite']);
Route::get('/pvcomite/destroy/{pv}', 'PvComiteController@destroy')->middleware(['auth', 'comite']);

/*
| Route concernant l'affichage du comite
*/
Route::get('/comite/actuel', ('ComiteController@actuel'));
Route::get('/comite/anciens', ('ComiteController@anciens'));
Route::get('/comite/webmaster', ('ComiteController@webmaster'));