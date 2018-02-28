<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal
 * @package App\Models
 * @version January 22, 2018, 3:56 pm UTC
 *
 * @property \App\Models\AreainfluenciaHasTipovegetal areainfluenciaHasTipovegetal
 * @property \App\Models\Usosvegetacion usosvegetacion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
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
 * @property integer AreaInfluencia_has_TipoVegetal_AreaInfluencia_id
 * @property integer AreaInfluencia_has_TipoVegetal_TipoVegetal_id
 */
class UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal extends Model
{
    use SoftDeletes;

    public $table = 'usosvegetacion_has_areainfluencia_has_tipovegetal';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'AreaInfluencia_has_TipoVegetal_AreaInfluencia_id',
        'AreaInfluencia_has_TipoVegetal_TipoVegetal_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'UsosVegetacion_id'                                => 'integer',
        'AreaInfluencia_has_TipoVegetal_AreaInfluencia_id' => 'integer',
        'AreaInfluencia_has_TipoVegetal_TipoVegetal_id'    => 'integer',
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
    public function areainfluenciaHasTipovegetal()
    {
        return $this->belongsTo(\App\Models\AreainfluenciaHasTipovegetal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function usosvegetacion()
    {
        return $this->belongsTo(\App\Models\Usosvegetacion::class);
    }
}
