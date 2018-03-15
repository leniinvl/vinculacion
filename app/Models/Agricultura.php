<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agricultura
 * @package App\Models
 * @version March 14, 2018, 11:23 pm UTC
 *
 * @property \App\Models\Unidadproduccion unidadproduccion
 * @property \App\Models\Usosuelo usosuelo
 * @property \Illuminate\Database\Eloquent\Collection agriculturaHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection origeningresosHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection tipoanimalesHasPlandegestionderiesgos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property integer UnidadProduccion_id
 * @property integer UsoSuelo_id
 */
class Agricultura extends Model
{
    use SoftDeletes;

    public $table = 'agricultura';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'UnidadProduccion_id',
        'UsoSuelo_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                  => 'integer',
        'UnidadProduccion_id' => 'integer',
        'UsoSuelo_id'         => 'integer',
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
    public function unidadproduccion()
    {
        return $this->belongsTo(\App\Models\Unidadproduccion::class, 'UnidadProduccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usosuelo()
    {
        return $this->belongsTo(\App\Models\Usosuelo::class, 'UsoSuelo_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function plandegestionderiesgos()
    {
        return $this->belongsToMany(\App\Models\Plandegestionderiesgo::class, 'agricultura_has_plandegestionderiesgos');
    }
}
