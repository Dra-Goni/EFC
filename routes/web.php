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

Route::get('/', 'MenuController@index');

Route::get('/login',['as' => 'login', 'uses'=>'LoginController@inicio'] );
Route::post('/login',['as' => 'iniciar', 'uses'=>'LoginController@login']);
Route::get('/logout',['as' => 'logout', 'uses'=>'LoginController@logout']);


Route::group(['prefix' => 'alumno'], function () {
    Route::get('/menu', 'AlumnoController@index');
    Route::get('/crear', 'AlumnoController@crear');
    Route::get('/historial', 'AlumnoController@ver');
    Route::post('/crear', 'AlumnoController@create');
    Route::get('/editar/{alumno}', 'AlumnoController@editar');
    Route::put('/modificar/{alumno}', 'AlumnoController@modificar');
    Route::delete('/eliminar/{alumno}', 'AlumnoController@eliminar');
});