<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanRiesgos_Has_GrupoAlimentosProductos
 * @package App\Models
 * @version January 22, 2018, 5:00 pm UTC
 *
 * @property \App\Models\Grupoalimentosproducto grupoalimentosproducto
 * @property \App\Models\Planriesgo planriesgo
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
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
 * @property integer GrupoAlimentosProductos_id
 */
class PlanRiesgos_Has_GrupoAlimentosProductos extends Model
{
    use SoftDeletes;

    public $table = 'planriesgos_has_grupoalimentosproductos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'GrupoAlimentosProductos_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'PlanRiesgos_id'             => 'integer',
        'GrupoAlimentosProductos_id' => 'integer',
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
    public function grupoalimentosproducto()
    {
        return $this->belongsTo(\App\Models\Grupoalimentosproducto::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function planriesgo()
    {
        return $this->belongsTo(\App\Models\Planriesgo::class);
    }
}
