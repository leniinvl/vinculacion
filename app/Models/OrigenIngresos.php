<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OrigenIngresos
 * @package App\Models
 * @version March 15, 2018, 4:44 pm UTC
 *
 * @property integer UnidadProduccion_id
 * @property integer Propietario_id
 */
class OrigenIngresos extends Model
{
    use SoftDeletes;

    public $table = 'origeningresos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'UnidadProduccion_id',
        'Propietario_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                  => 'integer',
        'UnidadProduccion_id' => 'integer',
        'Propietario_id'      => 'integer',
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
    public function unidadproduccion()
    {
        return $this->belongsTo(\App\Models\Unidadproduccion::class, 'UnidadProduccion_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function propietario()
    {
        return $this->belongsTo(\App\Models\Propietario::class, 'Propietario_id');
    }

}
