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

// Route::resource('planRiesgosHasGrupoAlimentosProductos', 'PlanRiesgos_Has_GrupoAlimentosProductosController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('planRiesgosHasTipoAgriculturas', 'PlanRiesgos_Has_TipoAgriculturaController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('evacuacionAguaLluvias', 'EvacuacionAguaLluviaController');

Route::resource('grupoAlimentosProductos', 'GrupoAlimentosProductosController');

Route::resource('lenguajes', 'LenguajeController');

Route::resource('manejoAmbientals', 'ManejoAmbientalController');

Route::resource('nivelDeTraficos', 'NivelDeTraficoController');

Route::resource('productos', 'ProductoController');

Route::resource('precipitaciones', 'PrecipitacionesController');

Route::resource('planRiesgosHasTipoAlimentos', 'PlanRiesgos_Has_TipoAlimentosController');

Route::resource('planRiesgosHasTipoAnimales', 'PlanRiesgos_Has_TipoAnimalesController');

Route::resource('planRiesgosHasTipoCultivos', 'PlanRiesgos_Has_TipoCultivosController');

Route::resource('tallerHasTipoDesechos', 'Taller_Has_TipoDesechoController');

Route::resource('tallerHasTipoRiesgos', 'Taller_Has_TipoRiesgosController');

Route::resource('tendenciaTierras', 'TendenciaTierraController');

Route::resource('tipoAbonos', 'TipoAbonoController');

Route::resource('propietarios', 'PropietarioController');

Route::resource('recirculacionAires', 'RecirculacionAireController');

Route::resource('religions', 'ReligionController');

Route::resource('ruidos', 'RuidoController');

Route::resource('tallers', 'TallerController');

Route::resource('unidadproduccions', 'unidadproduccionController');

Route::resource('tradicions', 'tradicionController');

Route::resource('trabajadores', 'trabajadoresController');

Route::resource('topologias', 'topologiaController');

Route::resource('tipoFuentes', 'TipoFuentesController');

Route::resource('tipoVegetals', 'TipoVegetalController');

Route::resource('topologias', 'TopologiaController');

Route::resource('tradicions', 'TradicionController');

Route::resource('organizacionSocials', 'OrganizacionSocialController');

Route::resource('planRiesgosHasOrigenIngresos', 'PlanRiesgos_Has_OrigenIngresosController');

Route::resource('paisajes', 'PaisajeController');

Route::resource('peligros', 'PeligrosController');

Route::resource('permeabilidadSuelos', 'PermeabilidadSueloController');

Route::resource('abastecimientoaguas', 'AbastecimientoaguaController');

// Route::resource('areainfluencias', 'AreainfluenciaController');

Route::resource('areainfluenciaHasLenguajes', 'Areainfluencia_has_lenguajeController');

Route::resource('areainfluenciaHasPeligros', 'Areainfluencia_has_peligrosController');

Route::resource('areainfluenciaHasReligions', 'Areainfluencia_has_religionController');

Route::resource('usoTierras', 'UsoTierraController');

// Route::resource('usosVegetacionHasAreaInfluenciaHasTipovegetals', 'UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalController');

Route::resource('usosVegetacions', 'UsosVegetacionController');

Route::resource('usosVegetacions', 'UsosVegetacionController');

// Route::resource('unidadProduccionHasPropietarios', 'UnidadProduccion_Has_PropietarioController');

Route::resource('biodigestors', 'BiodigestorController');

Route::resource('areainfluenciaHasUsotierras', 'Areainfluencia_has_usotierraController');


Route::resource('tipoAsociacions', 'TipoAsociacionController');


Route::resource('areaInfluenciaHasTipoFuentes', 'AreaInfluenciaHasTipoFuentesController');

Route::resource('areaInfluenciaHasTipoVegetals', 'AreaInfluenciaHasTipoVegetalController');

Route::resource('areaInfluenciaHasTopologias', 'AreaInfluenciaHasTopologiaController');

Route::resource('areaInfluenciaHasTradicions', 'AreaInfluenciaHasTradicionController');

Route::resource('calidadAires', 'CalidadAireController');

Route::resource('caracteristicasEtnicas', 'CaracteristicasEtnicasController');

Route::resource('categoriaProyectos', 'CategoriaProyectoController');

Route::resource('climas', 'ClimaController');

Route::resource('condicionesDrenajes', 'CondicionesDrenajeController');

Route::resource('consolidacionAreaInfluencias', 'ConsolidacionAreaInfluenciaController');

Route::resource('ecosistemas', 'EcosistemaController');

Route::resource('evacuacionAguasServidas', 'EvacuacionAguasServidasController');

Route::resource('origenIngresos', 'OrigenIngresosController');

Route::resource('tipoAgriculturas', 'TipoAgriculturaController');

Route::resource('tipoAlimentos', 'TipoAlimentosController');

Route::resource('tipoAlimentosConsumos', 'TipoAlimentosConsumoController');

Route::resource('tipoAnimales', 'TipoAnimalesController');

Route::resource('tipoControlPlagas', 'TipoControlPlagaController');

Route::resource('tipoCultivos', 'TipoCultivosController');

Route::resource('tipoDesechos', 'TipoDesechoController');

Route::resource('tipoProductos', 'TipoProductoController');

Route::resource('tipoProyectos', 'TipoProyectoController');

Route::resource('tipoRiesgos', 'TipoRiesgosController');

Route::resource('tipoSuelos', 'TipoSueloController');

Route::resource('tipoTerrenos', 'TipoTerrenoController');