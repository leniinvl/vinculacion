<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class areainfluencia
 * @package App\Models
 * @version January 24, 2018, 4:47 am UTC
 *
 * @property \App\Models\Abastecimientoagua abastecimientoagua
 * @property \App\Models\Calidadaire calidadaire
 * @property \App\Models\Calidadsuelo calidadsuelo
 * @property \App\Models\Caracteristicasetnica caracteristicasetnica
 * @property \App\Models\Clima clima
 * @property \App\Models\Condicionesdrenaje condicionesdrenaje
 * @property \App\Models\Consolidacionareainfluencia consolidacionareainfluencium
 * @property \App\Models\Ecosistema ecosistema
 * @property \App\Models\Evacuacionaguasservida evacuacionaguasservida
 * @property \App\Models\Evacuacionagualluvia evacuacoinagualluvium
 * @property \App\Models\Manejoambiental manejoambiental
 * @property \App\Models\Nivelfratico nivelfratico
 * @property \App\Models\Organizacionsocial organizacionsocial
 * @property \App\Models\Permeabilidadsuelo permeabilidadsuelo
 * @property \App\Models\Precipitaciones precipitacione
 * @property \App\Models\Recirculacionaire recirculacionaire
 * @property \App\Models\Ruido ruido
 * @property \App\Models\Tendenciatierra tendenciatierra
 * @property \App\Models\Tiposuelo tiposuelo
 * @property \App\Models\Tipoterreno tipoterreno
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
 * @property \Illuminate\Database\Eloquent\Collection Paisaje
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasGrupoalimentosproductos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoagricultura
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoalimentos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoalimentosconsumo
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection tallerHasTipodesecho
 * @property \Illuminate\Database\Eloquent\Collection tallerHasTiporiesgos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property float altitud
 * @property string tipoTerrenoDescripcion
 * @property string detalleCalidadAire
 * @property string detalleRuido
 * @property string observacionesEcosistema
 * @property integer ManejoAmbiental_id
 * @property integer CalidadAire_id
 * @property integer TipoTerreno_id
 * @property integer TipoSuelo_id
 * @property integer CalidadSuelo_id
 * @property integer Precipitaciones_id
 * @property integer NivelFratico_id
 * @property integer PermeabilidadSuelo_id
 * @property integer Clima_id
 * @property integer CondicionesDrenaje_id
 * @property integer Ruido_id
 * @property integer RecirculacionAire_id
 * @property integer Ecosistema_id
 * @property integer OrganizacionSocial_id
 * @property integer TendenciaTierra_id
 * @property integer AbastecimientoAgua_id
 * @property integer EvacuacoinAguaLluvia_id
 * @property integer CaracteristicasEtnicas_id
 * @property integer ConsolidacionAreaInfluencia_id
 * @property integer EvacuacionAguasServidas_id
 * @property string lat
 * @property string long
 */
class areainfluencia extends Model
{
    use SoftDeletes;

    public $table = 'areainfluencia';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'altitud',
        'tipoTerrenoDescripcion',
        'detalleCalidadAire',
        'detalleRuido',
        'observacionesEcosistema',
        'ManejoAmbiental_id',
        'CalidadAire_id',
        'TipoTerreno_id',
        'TipoSuelo_id',
        'CalidadSuelo_id',
        'Precipitaciones_id',
        'NivelFratico_id',
        'PermeabilidadSuelo_id',
        'Clima_id',
        'CondicionesDrenaje_id',
        'Ruido_id',
        'RecirculacionAire_id',
        'Ecosistema_id',
        'OrganizacionSocial_id',
        'TendenciaTierra_id',
        'AbastecimientoAgua_id',
        'EvacuacoinAguaLluvia_id',
        'CaracteristicasEtnicas_id',
        'ConsolidacionAreaInfluencia_id',
        'EvacuacionAguasServidas_id',
        'lat',
        'long',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                             => 'integer',
        'altitud'                        => 'float',
        'tipoTerrenoDescripcion'         => 'string',
        'detalleCalidadAire'             => 'string',
        'detalleRuido'                   => 'string',
        'observacionesEcosistema'        => 'string',
        'ManejoAmbiental_id'             => 'integer',
        'CalidadAire_id'                 => 'integer',
        'TipoTerreno_id'                 => 'integer',
        'TipoSuelo_id'                   => 'integer',
        'CalidadSuelo_id'                => 'integer',
        'Precipitaciones_id'             => 'integer',
        'NivelFratico_id'                => 'integer',
        'PermeabilidadSuelo_id'          => 'integer',
        'Clima_id'                       => 'integer',
        'CondicionesDrenaje_id'          => 'integer',
        'Ruido_id'                       => 'integer',
        'RecirculacionAire_id'           => 'integer',
        'Ecosistema_id'                  => 'integer',
        'OrganizacionSocial_id'          => 'integer',
        'TendenciaTierra_id'             => 'integer',
        'AbastecimientoAgua_id'          => 'integer',
        'EvacuacoinAguaLluvia_id'        => 'integer',
        'CaracteristicasEtnicas_id'      => 'integer',
        'ConsolidacionAreaInfluencia_id' => 'integer',
        'EvacuacionAguasServidas_id'     => 'integer',
        'lat'                            => 'string',
        'long'                           => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function abastecimientoagua()
    {
        return $this->belongsTo(\App\Models\Abastecimientoagua::class, 'AbastecimientoAgua_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function calidadaire()
    {
        return $this->belongsTo(\App\Models\Calidadaire::class, 'CalidadAire_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function calidadsuelo()
    {
        return $this->belongsTo(\App\Models\Calidadsuelo::class, 'CalidadSuelo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function caracteristicasetnicas()
    {
        return $this->belongsTo(\App\Models\Caracteristicasetnicas::class, 'CaracteristicasEtnicas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clima()
    {
        return $this->belongsTo(\App\Models\Clima::class, 'Clima_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function condicionesdrenaje()
    {
        return $this->belongsTo(\App\Models\Condicionesdrenaje::class, 'CondicionesDrenaje_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consolidacionareainfluencia()
    {
        return $this->belongsTo(\App\Models\Consolidacionareainfluencia::class, 'ConsolidacionAreaInfluencia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ecosistema()
    {
        return $this->belongsTo(\App\Models\Ecosistema::class, 'Ecosistema_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function evacuacionaguasservidas()
    {
        return $this->belongsTo(\App\Models\Evacuacionaguasservidas::class, 'EvacuacionAguasServidas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function evacuacionagualluvia()
    {
        return $this->belongsTo(\App\Models\Evacuacionagualluvia::class, 'EvacuacoinAguaLluvia_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function manejoambiental()
    {
        return $this->belongsTo(\App\Models\Manejoambiental::class, 'ManejoAmbiental_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nivelfratico()
    {
        return $this->belongsTo(\App\Models\NivelDeTrafico::class, 'NivelFratico_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function organizacionsocial()
    {
        return $this->belongsTo(\App\Models\Organizacionsocial::class, 'OrganizacionSocial_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function permeabilidadsuelo()
    {
        return $this->belongsTo(\App\Models\Permeabilidadsuelo::class, 'PermeabilidadSuelo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function precipitaciones()
    {
        return $this->belongsTo(\App\Models\Precipitaciones::class, 'Precipitaciones_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function recirculacionaire()
    {
        return $this->belongsTo(\App\Models\Recirculacionaire::class, 'RecirculacionAire_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ruido()
    {
        return $this->belongsTo(\App\Models\Ruido::class
            , 'Ruido_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tendenciatierra()
    {
        return $this->belongsTo(\App\Models\Tendenciatierra::class, 'TendenciaTierra_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tiposuelo()
    {
        return $this->belongsTo(\App\Models\Tiposuelo::class, 'TipoSuelo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoterreno()
    {
        return $this->belongsTo(\App\Models\Tipoterreno::class, 'TipoTerreno_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function lenguajes()
    {
        return $this->belongsToMany(\App\Models\Lenguaje::class, 'areainfluencia_has_lenguaje', 'areainfluencia_id', 'lenguaje_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function peligros()
    {
        return $this->belongsToMany(\App\Models\Peligros::class, 'areainfluencia_has_peligros', 'areainfluencia_id', 'peligros_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function religions()
    {
        return $this->belongsToMany(\App\Models\Religion::class, 'areainfluencia_has_religion', 'areainfluencia_id', 'religion_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipofuentes()
    {
        return $this->belongsToMany(\App\Models\Tipofuentes::class, 'areainfluencia_has_tipofuentes', 'areainfluencia_id', 'tipofuentes_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipovegetals()
    {
        return $this->belongsToMany(\App\Models\Tipovegetal::class, 'areainfluencia_has_tipovegetal', 'areainfluencia_id', 'tipovegetal_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function topologia()
    {
        return $this->belongsToMany(\App\Models\Topologia::class, 'areainfluencia_has_topologia', 'areainfluencia_id', 'topologia_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tradicions()
    {
        return $this->belongsToMany(\App\Models\Tradicion::class, 'areainfluencia_has_tradicion', 'areainfluencia_id', 'tradicion_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function usotierras()
    {
        return $this->belongsToMany(\App\Models\Usotierra::class, 'areainfluencia_has_usotierra', 'areainfluencia_id', 'usotierra_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paisajes()
    {
        return $this->hasMany(\App\Models\Paisaje::class);
    }
}
