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

/*Route::get('/', function () {
    return 'welcome';
});*/

Route::get('boas', 'MensagemController@show');

Route::get('posto', 'PostoController@show');

Route::post('mostrartodos', 'PostoController@mostrar_todos');

Route::post('mostrar_id', 'PostoController@mostrar_id');

Route::post('criar_registro', 'PostoController@criar_registro');

Route:post('atualizar_registro', 'PostoController@atualizar_registro');

Route::post('deletar_registro', 'PostoController@deletar_registro');

Route::post('posto','PostoController@post');




