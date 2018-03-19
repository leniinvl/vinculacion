<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanRiesgos_Has_OrigenIngresos
 * @package App\Models
 * @version March 19, 2018, 8:19 am UTC
 *
 * @property \App\Models\Origeningreso origeningreso
 * @property \App\Models\Plandegestionderiesgo plandegestionderiesgo
 * @property \Illuminate\Database\Eloquent\Collection agricultura
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAgricultura
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property integer OrigenIngresos_id
 */
class PlanRiesgos_Has_OrigenIngresos extends Model
{
    use SoftDeletes;

    public $table = 'plandegestionderiesgos_has_origeningresos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'OrigenIngresos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PlanDeGestionDeRiesgos_id' => 'integer',
        'OrigenIngresos_id' => 'integer'
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
    public function origeningreso()
    {
        return $this->belongsTo(\App\Models\Origeningreso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function plandegestionderiesgo()
    {
        return $this->belongsTo(\App\Models\Plandegestionderiesgo::class);
    }
}
