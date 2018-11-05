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



Route::get('usuarios', 'UsersController@index'); 

Route::get('directorio/activar/{id}', 'DirectorioController@activar');
Route::get('directorio/desactivar/{id}', 'DirectorioController@desactivar');

Route::get('/', 'PagesController@inicio');
Route::resource('directorio', 'DirectorioController');

Route::get('logout', 'Auth\LoginController@logout');
Route::post('login', 'Auth\LoginController@login');
Route::get('login', 'Auth\LoginController@showLoginForm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
