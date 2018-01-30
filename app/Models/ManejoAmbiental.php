<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ManejoAmbiental
 * @package App\Models
 * @version January 22, 2018, 3:32 am UTC
 *
 * @property \App\Models\Categoriaproyecto categoriaproyecto
 * @property \App\Models\Tipoproyecto tipoproyecto
 * @property \App\Models\Unidadproduccion unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection Areainfluencium
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
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property string nombre
 * @property string descripcion
 * @property integer TipoProyecto_id
 * @property integer CategoriaProyecto_id
 * @property integer UnidadProduccion_id
 */
class ManejoAmbiental extends Model
{
    use SoftDeletes;

    public $table = 'manejoambiental';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'TipoProyecto_id',
        'CategoriaProyecto_id',
        'UnidadProduccion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'TipoProyecto_id' => 'integer',
        'CategoriaProyecto_id' => 'integer',
        'UnidadProduccion_id' => 'integer'
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
    public function categoriaproyecto()
    {
        return $this->belongsTo(\App\Models\Categoriaproyecto::class,'CategoriaProyecto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoproyecto()
    {
        return $this->belongsTo(\App\Models\Tipoproyecto::class,'TipoProyecto_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function unidadproduccion()
    {
        return $this->belongsTo(\App\Models\Unidadproduccion::class,'UnidadProduccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function areainfluencia()
    {
        return $this->hasMany(\App\Models\Areainfluencium::class);
    }
}
