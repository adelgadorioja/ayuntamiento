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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@getIndex');



// rutas denuncias ...................................................................
Route::match(array('GET','POST'),'/denuncias/index', 'DenunciasController@mostrarDenuncias');

Route::match(array('GET','POST'),'denuncias/denunciasUser/{id}', 'DenunciasController@mostrarDenunciasPorUsuario');

Route::match(array('GET','POST'),'denuncias/crear', 'DenunciasController@crearDenuncias');

Route::match(array('GET','POST'),'denuncias/editar/{id}', 'DenunciasController@editarDenuncias');


// rutas chat ...................................................................
Route::get('chat/index', 'ChatController@mostrarIndex');

Route::get('chat/mostrarChat/{id}', 'ChatController@mostrarchat');

Route::get('chat/crear', 'ChatController@creaChatroom');

Route::get('chat/creaChatPrivado', 'ChatController@creaChatPrivado');


// rutas noticias ...................................................................


