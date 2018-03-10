<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tipoanimales
 * @package App\Models
 * @version March 10, 2018, 5:15 pm UTC
 *
 * @property \App\Models\Destino destino
 * @property \App\Models\Precuarium precuarium
 * @property \App\Models\Tipoproduccion tipoproduccion
 * @property \App\Models\Tipounidad tipounidad
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection Plandegestionderiesgo
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoagricultura
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property string nombre
 * @property integer TipoProduccion_id
 * @property integer TipoUnidad_id
 * @property integer Destino_id
 * @property integer Precuaria_id
 */
class tipoanimales extends Model
{
    use SoftDeletes;

    public $table = 'tipoanimales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'TipoProduccion_id',
        'TipoUnidad_id',
        'Destino_id',
        'Precuaria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'TipoProduccion_id' => 'integer',
        'TipoUnidad_id' => 'integer',
        'Destino_id' => 'integer',
        'Precuaria_id' => 'integer'
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
    public function destino()
    {
        return $this->belongsTo(\App\Models\Destino::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function precuarium()
    {
        return $this->belongsTo(\App\Models\Precuarium::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoproduccion()
    {
        return $this->belongsTo(\App\Models\Tipoproduccion::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipounidad()
    {
        return $this->belongsTo(\App\Models\Tipounidad::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function plandegestionderiesgos()
    {
        return $this->hasMany(\App\Models\Plandegestionderiesgo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function planriesgos()
    {
        return $this->belongsToMany(\App\Models\Planriesgo::class, 'planriesgos_has_tipoanimales');
    }
}
