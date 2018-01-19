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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('asociacions', 'AsociacionController');

Route::resource('propietarios', 'PropietarioController');

Route::resource('recirculacionAires', 'RecirculacionAireController');

Route::resource('religions', 'ReligionController');

Route::resource('ruidos', 'RuidoController');

Route::resource('tallers', 'TallerController');

Route::resource('unidadproduccions', 'unidadproduccionController');

Route::resource('tradicions', 'tradicionController');

Route::resource('trabajadores', 'trabajadoresController');

Route::resource('topologias', 'topologiaController');