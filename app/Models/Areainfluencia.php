<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AreaInfluencia
 * @package App\Models
 * @version January 19, 2018, 7:27 pm UTC
 *
 * @property \App\Models\Abastecimientoagua abastecimientoagua
 * @property \App\Models\Calidadaire calidadaire
 * @property \App\Models\Calidadsuelo calidadsuelo
 * @property \App\Models\Caracteristicasetnica caracteristicasetnica
 * @property \App\Models\Clima clima
 * @property \App\Models\Condicionesdrenaje condicionesdrenaje
 * @property \App\Models\Consolidacionareainfluencium consolidacionareainfluencium
 * @property \App\Models\Ecosistema ecosistema
 * @property \App\Models\Evacuacionaguasservida evacuacionaguasservida
 * @property \App\Models\Evacuacoinagualluvium evacuacoinagualluvium
 * @property \App\Models\Manejoambiental manejoambiental
 * @property \App\Models\Nivelfratico nivelfratico
 * @property \App\Models\Organizacionsocial organizacionsocial
 * @property \App\Models\Permeabilidadsuelo permeabilidadsuelo
 * @property \App\Models\Precipitacione precipitacione
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
class AreaInfluencia extends Model
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
        return $this->belongsTo(\App\Models\Abastecimientoagua::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function calidadaire()
    {
        return $this->belongsTo(\App\Models\Calidadaire::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function calidadsuelo()
    {
        return $this->belongsTo(\App\Models\Calidadsuelo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function caracteristicasetnica()
    {
        return $this->belongsTo(\App\Models\Caracteristicasetnica::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function clima()
    {
        return $this->belongsTo(\App\Models\Clima::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function condicionesdrenaje()
    {
        return $this->belongsTo(\App\Models\Condicionesdrenaje::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function consolidacionareainfluencium()
    {
        return $this->belongsTo(\App\Models\Consolidacionareainfluencium::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ecosistema()
    {
        return $this->belongsTo(\App\Models\Ecosistema::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function evacuacionaguasservida()
    {
        return $this->belongsTo(\App\Models\Evacuacionaguasservida::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function evacuacoinagualluvium()
    {
        return $this->belongsTo(\App\Models\Evacuacoinagualluvium::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function manejoambiental()
    {
        return $this->belongsTo(\App\Models\Manejoambiental::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nivelfratico()
    {
        return $this->belongsTo(\App\Models\Nivelfratico::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function organizacionsocial()
    {
        return $this->belongsTo(\App\Models\Organizacionsocial::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function permeabilidadsuelo()
    {
        return $this->belongsTo(\App\Models\Permeabilidadsuelo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function precipitacione()
    {
        return $this->belongsTo(\App\Models\Precipitacione::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function recirculacionaire()
    {
        return $this->belongsTo(\App\Models\Recirculacionaire::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ruido()
    {
        return $this->belongsTo(\App\Models\Ruido::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tendenciatierra()
    {
        return $this->belongsTo(\App\Models\Tendenciatierra::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tiposuelo()
    {
        return $this->belongsTo(\App\Models\Tiposuelo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoterreno()
    {
        return $this->belongsTo(\App\Models\Tipoterreno::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function lenguajes()
    {
        return $this->belongsToMany(\App\Models\Lenguaje::class, 'areainfluencia_has_lenguaje');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function peligros()
    {
        return $this->belongsToMany(\App\Models\Peligro::class, 'areainfluencia_has_peligros');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function religions()
    {
        return $this->belongsToMany(\App\Models\Religion::class, 'areainfluencia_has_religion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipofuentes()
    {
        return $this->belongsToMany(\App\Models\Tipofuente::class, 'areainfluencia_has_tipofuentes');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipovegetals()
    {
        return $this->belongsToMany(\App\Models\Tipovegetal::class, 'areainfluencia_has_tipovegetal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function topologia()
    {
        return $this->belongsToMany(\App\Models\Topologium::class, 'areainfluencia_has_topologia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tradicions()
    {
        return $this->belongsToMany(\App\Models\Tradicion::class, 'areainfluencia_has_tradicion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function usotierras()
    {
        return $this->belongsToMany(\App\Models\Usotierra::class, 'areainfluencia_has_usotierra');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paisajes()
    {
        return $this->hasMany(\App\Models\Paisaje::class);
    }
}
