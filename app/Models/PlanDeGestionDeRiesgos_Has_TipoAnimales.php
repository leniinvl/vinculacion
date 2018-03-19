<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanDeGestionDeRiesgos_Has_TipoAnimales
 * @package App\Models
 * @version March 19, 2018, 5:23 am UTC
 *
 * @property \App\Models\Plandegestionderiesgo plandegestionderiesgo
 * @property \App\Models\Tipoanimale tipoanimale
 * @property \Illuminate\Database\Eloquent\Collection agricultura
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAgricultura
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property integer TipoAnimales_id
 * @property integer cantidad_animales
 */
class PlanDeGestionDeRiesgos_Has_TipoAnimales extends Model
{
    use SoftDeletes;

    public $table = 'plandegestionderiesgos_has_tipoanimales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'TipoAnimales_id',
        'cantidad_animales'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PlanDeGestionDeRiesgos_id' => 'integer',
        'TipoAnimales_id' => 'integer',
        'cantidad_animales' => 'integer'
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
    public function plandegestionderiesgo()
    {
        return $this->belongsTo(\App\Models\Plandegestionderiesgo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoanimale()
    {
        return $this->belongsTo(\App\Models\Tipoanimale::class);
    }
}
