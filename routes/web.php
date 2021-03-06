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
Route::get('/profile/editParrainExt', ('ProfileController@editParrainExt'))->middleware(['auth', 'approved']);
Route::post('/profile/addParrainExt/{parrain}', ('ProfileController@addParrainExt'))->middleware(['auth', 'approved']);
Route::get('/profile/removeParrainExt/{parrain}', ('ProfileController@removeParrainExt'))->middleware(['auth', 'approved']);
Route::get('/profile/editBleuExt', ('ProfileController@editBleuExt'))->middleware(['auth', 'approved']);
Route::post('/profile/addBleuExt/{bleu}', ('ProfileController@addBleuExt'))->middleware(['auth', 'approved']);
Route::get('/profile/removeBleuExt/{bleu}', ('ProfileController@removeBleuExt'))->middleware(['auth', 'approved']);
Route::get('/profile/{user}/image', ('ProfileController@image'));
Route::get('/profile/search', ('ProfileController@search'));

/*
| Route concernant l'agenda
*/
//Route::get('event/add','EventController@createEvent');

Route::get('/agenda','EventController@index');


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
Route::get('/insultes', ('InsultesController@index'))->middleware(['auth', 'baptise']);
Route::post('/insultes/add', ('InsultesController@add'))->middleware(['auth', 'baptise']);
Route::get('/insultes/edit/{post}', ('InsultesController@edit'))->middleware(['auth', 'baptise']);
Route::post('/insultes/update/{post}', ('InsultesController@update'))->middleware(['auth', 'baptise']);
Route::get('/insultes/destroy/{post}', ('InsultesController@destroy'))->middleware(['auth', 'baptise']);
Route::get('/insultes/like/{post}', ('InsultesController@like'))->middleware(['auth', 'baptise']);
Route::get('/insultes/dislike/{post}', ('InsultesController@dislike'))->middleware(['auth', 'baptise']);
/*
| Route concernant les vestes
*/
Route::get('/vestes', ('VestesController@index'))->middleware(['auth', 'comite']);
Route::post('/vestes/add', ('VestesController@add'))->middleware(['auth', 'comite']);
Route::get('/vestes/edit/{post}', ('VestesController@edit'))->middleware(['auth', 'comite']);
Route::post('/vestes/update/{post}', ('VestesController@update'))->middleware(['auth', 'comite']);
Route::get('/vestes/destroy/{post}', ('VestesController@destroy'))->middleware(['auth', 'comite']);

/*
| Route concernant les citations
*/
Route::get('/citations', ('CitationsController@index'))->middleware(['auth', 'baptise']);
Route::post('/citations/add', ('CitationsController@add'))->middleware(['auth', 'baptise']);
Route::get('/citations/edit/{post}', ('CitationsController@edit'))->middleware(['auth', 'baptise']);
Route::post('/citations/update/{post}', ('CitationsController@update'))->middleware(['auth', 'baptise']);
Route::get('/citations/destroy/{post}', ('CitationsController@destroy'))->middleware(['auth', 'baptise']);
Route::get('/citations/like/{post}', ('CitationsController@like'))->middleware(['auth', 'baptise']);
Route::get('/citations/dislike/{post}', ('CitationsController@dislike'))->middleware(['auth', 'baptise']);
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
Route::get('/folklore/chant/{chant}',('FolkloreController@chant'));
Route::get('/folklore/chant_mp3/{chant}',('FolkloreController@chant_mp3'));
Route::get('/folklore/chants/admin',('FolkloreController@admin'))->middleware(['auth', 'bureau']);
Route::get('/folklore/chants/edit',('FolkloreController@edit'))->middleware(['auth', 'bureau']);
Route::post('/folklore/chants/update/{chant}',('FolkloreController@update'))->middleware(['auth', 'bureau']);
Route::post('/folklore/chants/add',('FolkloreController@add'))->middleware(['auth', 'bureau']);
Route::get('/folklore/oripeaux',('FolkloreController@oripeaux'));
/*
| Route site des bleus
*/
Route::get('/bleus',('BleusHomeController@index'));
Route::get('/bleus/informations',('BleusHomeController@informations'));
Route::get('/bleus/folklore',('BleusHomeController@folklore'));
Route::get('/bleus/faq',('BleusHomeController@faq'));
Route::get('/bleus/forum/Like')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum', ('BleusPostForumController@index'))->middleware(['auth', 'comite+bleu']);
Route::post('/bleus/forum/add', 'BleusPostForumController@add')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/edit/{post}', 'BleusPostForumController@edit')->middleware(['auth', 'comite+bleu']);
Route::post('/bleus/forum/update/{post}', 'BleusPostForumController@update')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/destroy/{post}', 'BleusPostForumController@destroy')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/ancre/{post}', 'BleusPostForumController@ancre')->middleware(['auth', 'bureau']);
Route::post('/bleus/forum/comment/add/{post}', 'BleusCommentForumController@add')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/comment/edit/{comment}', 'BleusCommentForumController@edit')->middleware(['auth', 'comite+bleu']);
Route::post('/bleus/forum/comment/update/{comment}', 'BleusCommentForumController@update')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/comment/destroy/{comment}', 'BleusCommentForumController@destroy')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/like/{post}', 'BleusPostForumController@like')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/dislike/{post}', 'BleusPostForumController@dislike')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/comment/like/{comment}', 'BleusCommentForumController@like')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/forum/comment/dislike/{comment}', 'BleusCommentForumController@dislike')->middleware(['auth', 'comite+bleu']);
Route::get('/forum/image/{url}', 'PostForumController@image')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant', ('PvRepetChantsController@index'))->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant/show/{pv}', ('PvRepetChantsController@show'))->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant/add', 'PvRepetChantsController@add')->middleware(['auth', 'comite+bleu']);
Route::post('/bleus/pvrepetchant/add', 'PvRepetChantsController@store')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant/edit/{pv}', 'PvRepetChantsController@edit')->middleware(['auth', 'comite+bleu']);
Route::post('/bleus/pvrepetchant/update/{pv}', 'PvRepetChantsController@update')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant/destroy/{pv}', 'PvRepetChantsController@destroy')->middleware(['auth', 'comite+bleu']);
Route::get('/bleus/pvrepetchant/old', 'PvRepetChantsController@old')->middleware(['auth', 'toge']);
Route::get('/bleus/agenda','BleusHomeController@agenda');


/*
| Route administration
*/
Route::get('/admin/menus',('AdminController@menus'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/droitMenu/{menu}/{droit}',('AdminController@droitMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/droitMenuBleus/{menu}/{droit}',('AdminController@droitMenuBleus'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/droitSousMenu/{sous_menu}/{droit}',('AdminController@droitSousMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/afficheMenu/{menu}/{affiche}',('AdminController@afficheMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/afficheMenuBleus/{menu}/{affiche}',('AdminController@afficheMenuBleus'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/afficheSousMenu/{sous_menu}/{affiche}',('AdminController@afficheSousMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/addMenu',('AdminController@addMenu'))->middleware(['auth', 'admin']);
Route::post('/admin/menus/addMenu',('AdminController@storeMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/destroyMenu/{menu}',('AdminController@destroyMenu'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/destroyMenuBleus/{menu}',('AdminController@destroyMenuBleus'))->middleware(['auth', 'admin']);
Route::get('/admin/menus/destroySousMenu/{sousMenu}',('AdminController@destroySousMenu'))->middleware(['auth', 'admin']);

Route::get('/admin/acces',('AdminController@acces'))->middleware(['auth', 'admin']);
Route::get('/admin/acces/changePhoto',('AdminController@changePhoto'))->middleware(['auth', 'admin']);
Route::get('/admin/acces/changeDroit',('AdminController@changeDroit'))->middleware(['auth', 'admin']);
Route::get('/admin/acces/changeBleus',('AdminController@changeBleus'))->middleware(['auth', 'admin']);

Route::get('/admin/repertoire',('AdminController@repertoire'))->middleware(['auth', 'admin']);
Route::get('/admin/repertoire/nouveauComite',('AdminController@nouveauComite'))->middleware(['auth', 'admin']);
Route::post('/admin/repertoire/nouveauComite',('AdminController@addNouveauComite'))->middleware(['auth', 'admin']);
Route::get('/admin/repertoire/nouvelleFonction',('AdminController@nouvelleFonction'))->middleware(['auth', 'admin']);
Route::post('/admin/repertoire/nouvelleFonction',('AdminController@addNouvelleFonction'))->middleware(['auth', 'admin']);
Route::get('/admin/repertoire/searchFonction',('AdminController@searchFonction'))->middleware(['auth', 'admin']);
Route::get('/admin/repertoire/deleteFonction/{user}/{fonction_id}/{annee}', ('AdminController@deleteFonction'))->middleware(['auth', 'admin']);
Route::get('/admin/repertoire/nouveauClerge',('AdminController@nouveauClerge'))->middleware(['auth', 'admin']);
Route::post('/admin/repertoire/nouveauClerge',('AdminController@addNouveauClerge'))->middleware(['auth', 'admin']);

Route::get('/admin/newsletter', ('AdminController@newsletter'))->middleware(['auth', 'bureau']);
Route::post('/admin/newsletter', ('AdminController@sendNewsletter'))->middleware(['auth', 'bureau']);
Route::get('/admin/newsletter/old', ('AdminController@oldNewsletter'))->middleware(['auth', 'bureau']);


/*
| Route concernant les lettres de motivations
*/
Route::get('/lettremotivation', ('LettreMotivationController@index'))->middleware(['auth', 'comite']);
Route::post('/lettremotivation', ('LettreMotivationController@post'))->middleware(['auth', 'comite']);
Route::get('/lettremotivation/get/{lettre}', ('LettreMotivationController@get'))->middleware(['auth', 'toge+vieux']);

/*
| Route concernant le pense-bete
*/
Route::get('/pensebete',('PenseBeteController@pensebete'))->middleware(['auth', 'baptise']);
Route::get('/pensebete/memo/{memo}',('PenseBeteController@memo'))->middleware(['auth', 'baptise']);
Route::get('/pensebete/admin',('PenseBeteController@admin'))->middleware(['auth', 'baptise']);
Route::get('/pensebete/edit',('PenseBeteController@edit'))->middleware(['auth', 'baptise']);
Route::post('/pensebete/update/{memo}',('PenseBeteController@update'))->middleware(['auth', 'baptise']);
Route::post('/pensebete/add',('PenseBeteController@add'))->middleware(['auth', 'baptise']);

/*
| Route concernant les fichiers
*/
Route::get('/file/{user_id}', ('FileController@index'))->middleware(['auth', 'baptise']);
Route::get('/file/dossier/{dossier}', ('FileController@dossier'))->middleware(['auth', 'baptise']);
Route::get('/file/fichier/{fichier}', ('FileController@fichier'))->middleware(['auth', 'baptise']);
Route::get('/file/add_dossier/{parent}', ('FileController@add_dossier'))->middleware(['auth', 'baptise']);
Route::post('/file/add_dossier/{parent}', ('FileController@store_dossier'))->middleware(['auth', 'baptise']);
Route::get('/file/edit_dossier/{dossier}', ('FileController@edit_dossier'))->middleware(['auth', 'baptise']);
Route::post('/file/update_dossier/{dossier}', ('FileController@update_dossier'))->middleware(['auth', 'baptise']);
Route::get('/file/destroy_dossier/{dossier}', ('FileController@destroy_dossier'))->middleware(['auth', 'baptise']);
Route::get('/file/add_fichier/{parent}', ('FileController@add_fichier'))->middleware(['auth', 'baptise']);
Route::post('/file/add_fichier/{parent}', ('FileController@store_fichier'))->middleware(['auth', 'baptise']);
Route::get('/file/edit_fichier/{fichier}', ('FileController@edit_fichier'))->middleware(['auth', 'baptise']);
Route::post('/file/update_fichier/{fichier}', ('FileController@update_fichier'))->middleware(['auth', 'baptise']);
Route::get('/file/destroy_fichier/{fichier}', ('FileController@destroy_fichier'))->middleware(['auth', 'baptise']);
/*
| Route concernant les bugs
*/
Route::get('/bug', ('BugController@index'))->middleware(['auth', 'comite']);
Route::post('/bug/add', ('BugController@add'))->middleware(['auth', 'comite']);
Route::get('/bug/edit/{post}', ('BugController@edit'))->middleware(['auth', 'comite']);
Route::post('/bug/update/{post}', ('BugController@update'))->middleware(['auth', 'comite']);
Route::get('/bug/destroy/{post}', ('BugController@destroy'))->middleware(['auth', 'comite']);

/*
| Route concernant les tuyaux
*/
Route::get('/tuyaux', ('TuyauxController@index'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/dossier/{dossier}', ('TuyauxController@dossier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/fichier/{fichier}', ('TuyauxController@fichier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/add_dossier/{parent}', ('TuyauxController@add_dossier'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/add_dossier/{parent}', ('TuyauxController@store_dossier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/edit_dossier/{dossier}', ('TuyauxController@edit_dossier'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/update_dossier/{dossier}', ('TuyauxController@update_dossier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/destroy_dossier/{dossier}', ('TuyauxController@destroy_dossier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/add_fichier/{parent}', ('TuyauxController@add_fichier'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/add_fichier/{parent}', ('TuyauxController@store_fichier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/edit_fichier/{fichier}', ('TuyauxController@edit_fichier'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/update_fichier/{fichier}', ('TuyauxController@update_fichier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/destroy_fichier/{fichier}', ('TuyauxController@destroy_fichier'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/add_cours', ('TuyauxController@add_cours'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/add_cours', ('TuyauxController@store_cours'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/edit_cours', ('TuyauxController@edit_cours'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/cours/{cours}', ('TuyauxController@cours'))->middleware(['auth', 'baptise']);
Route::post('/tuyaux/update_cours/{cours}', ('TuyauxController@update_cours'))->middleware(['auth', 'baptise']);
Route::get('/tuyaux/destroy_cours/{cours}', ('TuyauxController@destroy_cours'))->middleware(['auth', 'admin']);


/*
| Route concernant les délations
*/
Route::get('/delations', ('DelationsController@balance'))->middleware(['auth', 'baptise']);
Route::get('/delations/clerge', ('DelationsController@index'))->middleware(['auth', 'comite']);
Route::post('/delations/add', ('DelationsController@add'))->middleware(['auth', 'baptise']);
Route::get('/delations/image/{url}', ('DelationsController@image'))->middleware(['auth', 'comite']);
