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
Route::get('/profile/search', ('ProfileController@search'));

/*
| Route concernant l'agenda
*/ 
//Route::get('event/add','EventController@createEvent');
Route::post('event','EventController@store');
Route::get('event','EventController@calender');

/*
| Route concernant le forum
*/ 
Route::get('/forum/Like')->middleware(['auth', 'comite']);
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
| Route concernant les insultes
*/ 
Route::get('/insultes', ('InsultesController@index'))->middleware(['auth', 'comite']);
Route::post('/insultes/add', ('InsultesController@add'))->middleware(['auth', 'comite']);
Route::get('/insultes/edit/{post}', ('InsultesController@edit'))->middleware(['auth', 'comite']);
Route::post('/insultes/update/{post}', ('InsultesController@update'))->middleware(['auth', 'comite']);
Route::get('/insultes/destroy/{post}', ('InsultesController@destroy'))->middleware(['auth', 'comite']);
Route::get('/insultes/like/{post}', ('InsultesController@like'))->middleware(['auth', 'comite']);
Route::get('/insultes/dislike/{post}', ('InsultesController@dislike'))->middleware(['auth', 'comite']);
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

/*
| Route concernant les photos
*/
Route::get('/photos', ('PhotoController@index'))->middleware(['auth', 'baptise']);
Route::get('/photos/admin', ('PhotoController@admin'))->middleware(['auth', 'admin']);
Route::post('/photos/create_album', ('PhotoController@createAlbum'))->middleware(['auth', 'admin']);
Route::post('/photos/add_photos', ('PhotoController@storePhotos'))->middleware(['auth', 'admin']);
Route::get('/photos/add_photos/{album}', ('PhotoController@addPhotos'))->middleware(['auth', 'admin']);
Route::get('/photos/cover/{album}', ('PhotoController@cover'))->middleware(['auth', 'baptise']);
Route::get('/photos/{annee}', ('PhotoController@annee'))->middleware(['auth', 'baptise']);
Route::get('/photos/{annee}/{album}', ('PhotoController@album'))->middleware(['auth', 'baptise']);
Route::get('/photos/{annee}/{album}/{photo}', ('PhotoController@photo'))->middleware(['auth', 'baptise']);

/*
| Route concernant les archives
*/
Route::get('/archives', ('ArchiveController@index'))->middleware(['auth', 'baptise']);
Route::get('/archives/add', ('ArchiveController@add'))->middleware(['auth', 'bureau']);
Route::post('/archives/add', ('ArchiveController@store'))->middleware(['auth', 'bureau']);
Route::get('/archives/file/{url}', ('ArchiveController@file'))->middleware(['auth', 'baptise']);
Route::get('/archives/missel/{url}', ('ArchiveController@file'))->middleware(['auth', 'comite']);

/*
| Route concernant le folklore
*/
Route::get('/folklore/chants',('FolkloreController@chants'));
Route::get('/folklore/oripeaux',('FolkloreController@oripeaux'));
/*
| Route site des bleus
*/
Route::get('/bleus',('BleusHomeController@index'));
Route::get('/bleus/informations',('BleusHomeController@informations'));
Route::get('/bleus/folklore',('BleusHomeController@folklore'));
Route::get('/bleus/faq',('BleusHomeController@faq'));