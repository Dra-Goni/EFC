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

Route::get('/', 'MenuController@index')->middleware('auth');

Route::get('/login',['as' => 'login', 'uses'=>'LoginController@inicio'] );
Route::post('/login',['as' => 'iniciar', 'uses'=>'LoginController@login']);
Route::get('/logout',['as' => 'logout', 'uses'=>'LoginController@logout']);


Route::group(['prefix' => 'alumno', 'middleware' => 'auth'], function () {
    Route::get('/menu', 'AlumnoController@index');
    Route::get('/crear', 'AlumnoController@crear');
    Route::get('/historial', 'AlumnoController@ver');
    Route::post('/crear', 'AlumnoController@create');
    Route::get('/editar/{alumno}', 'AlumnoController@editar');
    Route::put('/modificar/{alumno}', 'AlumnoController@modificar');
    Route::delete('/eliminar/{alumno}', 'AlumnoController@eliminar');
});

Route::group(['prefix' => 'inasistencia', 'middleware' => 'auth'], function () {
    Route::get('/crear', 'InasistenciaController@crear');
    Route::post('/crear', 'InasistenciaController@create');
});

Route::group(['prefix' => 'seguimiento', 'middleware' => 'auth'], function () {
    Route::get('/menu', 'SeguimientoController@index');
    Route::get('/historial', 'SeguimientoController@ver');
    Route::post('/no', 'SeguimientoController@no');
    Route::post('/yes', 'SeguimientoController@si');
    Route::post('/respuesta', 'SeguimientoController@respuesta');
    Route::get('/cordinador', 'SeguimientoController@ver_cor');
    Route::post('/no_cor', 'SeguimientoController@no_cor');
    Route::post('/yes_cor', 'SeguimientoController@si_cor');
    Route::post('/respuesta_cor', 'SeguimientoController@respuesta_cor');
});