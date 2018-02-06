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


// rutas denuncias ...................................................................
Route::get('denuncia', 'DenunciasController@getIndex');

Route::get('denuncia/mostrarDenucias/{id}', 'DenunciasController@mostrarDenuncias');

Route::get('denuncia/crear', 'DenunciasController@crearDenuncias');

Route::get('denuncia/editar/{id}', 'DenunciasController@editarDenuncias');


// rutas chat ...................................................................
Route::get('chat', 'ChatController@mostrarIndex');

Route::get('chat/mostrarChat/{id}', 'ChatController@mostrarchat');

Route::get('chat/creaChatroom', 'ChatController@creaChatroom');

Route::get('chat/creaChatPrivado', 'ChatController@creaChatPrivado');


// rutas noticias ...................................................................


