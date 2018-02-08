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


Auth::routes();

Route::get('/home', 'HomeController@getIndex');



// rutas denuncias ...................................................................
Route::get('/denuncias', 'DenunciasController@getIndex');

Route::get('denuncias/mostrarDenucias/{id}', 'DenunciasController@mostrarDenuncias');

Route::get('denuncias/crear', 'DenunciasController@crearDenuncias');

Route::get('denuncias/editar/{id}', 'DenunciasController@editarDenuncias');


// rutas chat ...................................................................
Route::get('chat', 'ChatController@mostrarIndex');

Route::get('chat/mostrarChat/{id}', 'ChatController@mostrarchat');

Route::get('chat/creaChatroom', 'ChatController@creaChatroom');

Route::get('chat/creaChatPrivado', 'ChatController@creaChatPrivado');


// rutas noticias ...................................................................


