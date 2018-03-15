<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AreaInfluencia
 * @package App\Models
 * @version March 15, 2018, 4:15 am UTC
 *
 * @property \App\Models\Caracteristicasetnica caracteristicasetnica
 * @property \App\Models\Clima clima
 * @property \App\Models\Condicionesdrenaje condicionesdrenaje
 * @property \App\Models\Ecosistema ecosistema
 * @property \App\Models\Manejoambiental manejoambiental
 * @property \App\Models\Permeabilidadsuelo permeabilidadsuelo
 * @property \App\Models\Tiposuelo tiposuelo
 * @property \App\Models\Usosuelo usosuelo
 * @property \Illuminate\Database\Eloquent\Collection agricultura
 * @property \Illuminate\Database\Eloquent\Collection agriculturaHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection origeningresosHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection Paisaje
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection tipoanimalesHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property float altitud
 * @property string tipoTerrenoDescripcion
 * @property string detalleCalidadAire
 * @property string detalleRuido
 * @property string observacionesEcosistema
 * @property string lat
 * @property string long
 * @property integer ManejoAmbiental_id
 * @property integer UsoSuelo_id
 * @property integer TipoSuelo_id
 * @property integer PermeabilidadSuelo_id
 * @property integer Clima_id
 * @property integer CondicionesDrenaje_id
 * @property integer Ecosistema_id
 * @property integer CaracteristicasEtnicas_id
 * @property string nivelTraficoDescripcion
 * @property string recirculacionAireDescripcion
 * @property string organizacionSocialDescripcion
 * @property string tendenciaTierraDescripcion
 * @property string abastecimientoAguaDescripcion
 * @property string evacuacionAguaLluviaDescripcion
 * @property string consolidacionAreasInfluenciaDescripcion
 * @property string evacuacionAguasServidasDescripcion
 * @property string usoVegetacionDescripcion
 * @property string tradicionesDescripcion
 * @property string tipoFuentesDescripcion
 * @property float ruido
 * @property float precipitaciones
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
        'lat',
        'long',
        'ManejoAmbiental_id',
        'UsoSuelo_id',
        'TipoSuelo_id',
        'PermeabilidadSuelo_id',
        'Clima_id',
        'CondicionesDrenaje_id',
        'Ecosistema_id',
        'CaracteristicasEtnicas_id',
        'nivelTraficoDescripcion',
        'recirculacionAireDescripcion',
        'organizacionSocialDescripcion',
        'tendenciaTierraDescripcion',
        'abastecimientoAguaDescripcion',
        'evacuacionAguaLluviaDescripcion',
        'consolidacionAreasInfluenciaDescripcion',
        'evacuacionAguasServidasDescripcion',
        'usoVegetacionDescripcion',
        'tradicionesDescripcion',
        'tipoFuentesDescripcion',
        'ruido',
        'precipitaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'altitud' => 'float',
        'tipoTerrenoDescripcion' => 'string',
        'detalleCalidadAire' => 'string',
        'detalleRuido' => 'string',
        'observacionesEcosistema' => 'string',
        'lat' => 'string',
        'long' => 'string',
        'ManejoAmbiental_id' => 'integer',
        'UsoSuelo_id' => 'integer',
        'TipoSuelo_id' => 'integer',
        'PermeabilidadSuelo_id' => 'integer',
        'Clima_id' => 'integer',
        'CondicionesDrenaje_id' => 'integer',
        'Ecosistema_id' => 'integer',
        'CaracteristicasEtnicas_id' => 'integer',
        'nivelTraficoDescripcion' => 'string',
        'recirculacionAireDescripcion' => 'string',
        'organizacionSocialDescripcion' => 'string',
        'tendenciaTierraDescripcion' => 'string',
        'abastecimientoAguaDescripcion' => 'string',
        'evacuacionAguaLluviaDescripcion' => 'string',
        'consolidacionAreasInfluenciaDescripcion' => 'string',
        'evacuacionAguasServidasDescripcion' => 'string',
        'usoVegetacionDescripcion' => 'string',
        'tradicionesDescripcion' => 'string',
        'tipoFuentesDescripcion' => 'string',
        'ruido' => 'float',
        'precipitaciones' => 'float'
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
        return $this->belongsTo(\App\Models\Condicionesdrenaje::class, 'CondicionesDrenaje_id');
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
    public function manejoambiental()
    {
        return $this->belongsTo(\App\Models\Manejoambiental::class);
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
    public function tiposuelo()
    {
        return $this->belongsTo(\App\Models\Tiposuelo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usosuelo()
    {
        return $this->belongsTo(\App\Models\Usosuelo::class);
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
    public function religions()
    {
        return $this->belongsToMany(\App\Models\Religion::class, 'areainfluencia_has_religion', 'areainfluencia_id', 'religion_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipovegetals()
    {
        return $this->belongsToMany(\App\Models\Tipovegetal::class, 'areainfluencia_has_tipovegetal', 'areainfluencia_id', 'tipovegetal_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function paisajes()
    {
        return $this->hasMany(\App\Models\Paisaje::class);
    }
}
