<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trabajadores
 * @package App\Models
 * @version March 15, 2018, 4:39 pm UTC
 *
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
        'PlanDeGestionDeRiesgos_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                        => 'integer',
        'nombre'                    => 'string',
        'apellido'                  => 'string',
        'fechaDeNacimiento'         => 'date',
        'Genero_id'                 => 'integer',
        'Pais_id'                   => 'integer',
        'Ciudad_id'                 => 'integer',
        'instruccionFormal'         => 'string',
        'horasTrabajo'              => 'integer',
        'salario'                   => 'float',
        'PlanDeGestionDeRiesgos_id' => 'integer',
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
        return $this->belongsTo(\App\Models\Ciudad::class, 'Ciudad_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function genero()
    {
        return $this->belongsTo(\App\Models\Genero::class, 'Genero_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pais()
    {
        return $this->belongsTo(\App\Models\Pais::class, 'Pais_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function plandegestionderiesgos()
    {
        return $this->belongsTo(\App\Models\PlanDeGestionDeRiesgos::class, 'PlanDeGestionDeRiesgos_id');
    }

}
