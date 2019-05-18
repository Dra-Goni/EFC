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

Route::get('/', 'LoginController@inicio');

Route::get('/login',['as' => 'login', 'uses'=>'LoginController@inicio'] );
Route::post('/login',['as' => 'iniciar', 'uses'=>'LoginController@login']);
Route::get('/logout',['as' => 'logout', 'uses'=>'LoginController@logout']);