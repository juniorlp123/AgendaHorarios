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

Route::get('/', "LoginController@index");
Route::get('login/', "LoginController@index");
Route::post('login/', "LoginController@login");
Route::get('logout/', "LoginController@logout");

Route::group(['middleware' => 'usersession'], function () {

    Route::get('users/', "UsersController@index");
    Route::get('users/create', "UsersController@create");
    Route::post('users/store', "UsersController@store");
    Route::get('users/{id}/destroy', "UsersController@destroy");
    Route::get('users/{id}/edit', "UsersController@edit");
    Route::post('users/{id}/update', "UsersController@update");

    Route::get('clientes/', "ClientesController@index");
    Route::get('clientes/create', "ClientesController@create");
    Route::post('clientes/store', "ClientesController@store");
    Route::get('clientes/{id}/destroy', "ClientesController@destroy");
    Route::get('clientes/{id}/edit', "ClientesController@edit");
    Route::post('clientes/{id}/update', "ClientesController@update");

    Route::get('servicos/', "ServicosController@index");
    Route::get('servicos/create', "ServicosController@create");
    Route::post('servicos/store', "ServicosController@store");
    Route::get('servicos/{id}/destroy', "ServicosController@destroy");
    Route::get('servicos/{id}/edit', "ServicosController@edit");
    Route::post('servicos/{id}/update', "ServicosController@update");

    Route::get('agendamentos/', "AgendamentosController@index");
    Route::get('agendamentos/getAgendamentos', "AgendamentosController@getAgendamentos");
    Route::get('agendamentos/create', "AgendamentosController@create");
    Route::post('agendamentos/store', "AgendamentosController@store");
    Route::get('agendamentos/{id}/destroy', "AgendamentosController@destroy");
    Route::get('agendamentos/{id}/edit', "AgendamentosController@edit");
    Route::post('agendamentos/{id}/update', "AgendamentosController@update");

});