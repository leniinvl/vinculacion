<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Propietario
 * @package App\Models
 * @version March 17, 2018, 6:47 pm UTC
 *
 * @property integer ci
 * @property string nombre
 * @property integer Genero_id
 * @property string correo
 * @property date fechaNacimiento
 * @property string telefono
 * @property string observaciones
 */
class Propietario extends Model
{
    use SoftDeletes;

    public $table = 'propietario';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'ci',
        'nombre',
        'Genero_id',
        'correo',
        'fechaNacimiento',
        'telefono',
        'observaciones',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'              => 'integer',
        'ci'              => 'integer',
        'nombre'          => 'string',
        'Genero_id'       => 'integer',
        'correo'          => 'string',
        'fechaNacimiento' => 'date',
        'telefono'        => 'string',
        'observaciones'   => 'string',
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
    public function genero()
    {
        return $this->belongsTo(\App\Models\Genero::class, 'Genero_id');
    }

}
