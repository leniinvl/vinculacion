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

Route::resource('planRiesgos', 'PlanRiesgosController');

Route::resource('planRiesgosHasGrupoAlimentosProductos', 'PlanRiesgos_Has_GrupoAlimentosProductosController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('planRiesgosHasTipoAgriculturas', 'PlanRiesgos_Has_TipoAgriculturaController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');