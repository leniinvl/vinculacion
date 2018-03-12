<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trabajadores
 * @package App\Models
 * @version March 12, 2018, 1:27 am UTC
 *
 * @property \App\Models\Ciudad ciudad
 * @property \App\Models\Genero genero
 * @property \App\Models\Pai pai
 * @property \App\Models\Plandegestionderiesgo plandegestionderiesgo
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
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoagricultura
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property string nombre
 * @property string apellido
 * @property date fechaDeNacimiento
 * @property integer Genero_id
 * @property integer Pais_id
 * @property integer Ciudad_id
 * @property string instruccionFormal
 * @property integer horasTrabajo
 * @property float salario
 * @property integer PlanDeGestionDeRiesgos_id
 */
class Trabajadores extends Model
{
    use SoftDeletes;

    public $table = 'trabajadores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellido',
        'fechaDeNacimiento',
        'Genero_id',
        'Pais_id',
        'Ciudad_id',
        'instruccionFormal',
        'horasTrabajo',
        'salario',
        'PlanDeGestionDeRiesgos_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellido' => 'string',
        'fechaDeNacimiento' => 'date',
        'Genero_id' => 'integer',
        'Pais_id' => 'integer',
        'Ciudad_id' => 'integer',
        'instruccionFormal' => 'string',
        'horasTrabajo' => 'integer',
        'salario' => 'float',
        'PlanDeGestionDeRiesgos_id' => 'integer'
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
    public function ciudad()
    {
        return $this->belongsTo(\App\Models\Ciudad::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genero()
    {
        return $this->belongsTo(\App\Models\Genero::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pai()
    {
        return $this->belongsTo(\App\Models\Pai::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function plandegestionderiesgo()
    {
        return $this->belongsTo(\App\Models\Plandegestionderiesgo::class);
    }
}
