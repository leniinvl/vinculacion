<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AreaInfluenciaHasTipoVegetal
 * @package App\Models
 * @version January 23, 2018, 1:57 am UTC
 *
 * @property \App\Models\Areainfluencium areainfluencium
 * @property \App\Models\Tipovegetal tipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
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
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property integer TipoVegetal_id
 */
class AreaInfluenciaHasTipoVegetal extends Model
{
    use SoftDeletes;

    public $table = 'areainfluencia_has_tipovegetal';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'TipoVegetal_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'AreaInfluencia_id' => 'integer',
        'TipoVegetal_id'    => 'integer',
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
    public function areainfluencium()
    {
        return $this->belongsTo(\App\Models\Areainfluencium::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipovegetal()
    {
        return $this->belongsTo(\App\Models\Tipovegetal::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function usosvegetacions()
    {
        return $this->belongsToMany(\App\Models\Usosvegetacion::class, 'usosvegetacion_has_areainfluencia_has_tipovegetal');
    }
}
