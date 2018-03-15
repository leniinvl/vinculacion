<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoAnimales
 * @package App\Models
 * @version March 15, 2018, 4:41 pm UTC
 *
 * @property string nombre
 * @property integer Precuaria_id
 * @property integer TipoUnidad_id
 * @property integer TipoProduccion_id
 * @property integer Destino_id
 */
class TipoAnimales extends Model
{
    use SoftDeletes;

    public $table = 'tipoanimales';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'Precuaria_id',
        'TipoUnidad_id',
        'TipoProduccion_id',
        'Destino_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                => 'integer',
        'nombre'            => 'string',
        'Precuaria_id'      => 'integer',
        'TipoUnidad_id'     => 'integer',
        'TipoProduccion_id' => 'integer',
        'Destino_id'        => 'integer',
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
        return $this->belongsTo(\App\Models\destino::class, 'Destino_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function precuaria()
    {
        return $this->belongsTo(\App\Models\precuaria::class, 'Precuaria_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoproduccion()
    {
        return $this->belongsTo(\App\Models\Tipoproduccion::class, 'TipoProduccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipounidad()
    {
        return $this->belongsTo(\App\Models\tipounidad::class, 'TipoUnidad_id');
    }

}
