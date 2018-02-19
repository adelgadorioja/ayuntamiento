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
Route::name('inicio')->get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@getIndex');

// rutas denuncias ...................................................................

Route::name('mostrarDenuncias')->match(array('GET','POST'),'/denuncias/index', 'DenunciasController@mostrarDenuncias');

Route::name('mostrarDenunciasUsuario')->match(array('GET'),'denuncias/denunciasUser', 'DenunciasController@mostrarDenunciasPorUsuario');

Route::name('crearDenuncia')->match(array('GET'),'denuncias/crear', 'DenunciasController@crearDenuncias');
Route::name('crearDenuncia')->match(array('POST'),'denuncias/crear', 'DenunciasController@store');

Route::name('responderDenuncia')->match(array('PUT'),'denuncias/responder', 'DenunciasController@responderDenuncias');

Route::name('editarDenuncia')->match(array('GET','POST'),'denuncias/editar/{id}', 'DenunciasController@editarDenuncias');

// rutas chat ...................................................................

Route::name('mostrarChats')->get('chat/index', 'ChatController@mostrarIndex');

Route::name('mostrarChat')->get('chat/mostrarChat/{id}', 'ChatController@mostrarchat');

Route::name('crearChat')->get('chat/crear', 'ChatController@creaChatroom');

Route::name('creaChatPrivado')->get('chat/creaChatPrivado', 'ChatController@creaChatPrivado');


// rutas noticias ...................................................................

Route::name('mostrarNoticias')->match(array('GET','POST'),'noticias/index', 'NoticiasController@mostrarNoticias');

Route::name('crearNoticias')->match(array('GET'),'noticias/crear', 'NoticiasController@crearNoticias');

Route::name('crearNoticias')->match(array('POST'),'noticias/crear', 'NoticiasController@store');





// API

Route::name('enviarMensaje')->match(array('POST'),'chat/enviar', 'ChatController@enviar');