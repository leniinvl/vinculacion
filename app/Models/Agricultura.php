<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Agricultura
 * @package App\Models
 * @version March 15, 2018, 4:45 pm UTC
 *
 * @property integer UnidadProduccion_id
 * @property integer UsoSuelo_id
 */
class Agricultura extends Model
{
    use SoftDeletes;

    public $table = 'agricultura';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'UnidadProduccion_id',
        'UsoSuelo_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                  => 'integer',
        'UnidadProduccion_id' => 'integer',
        'UsoSuelo_id'         => 'integer',
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
    public function usosuelo()
    {
        return $this->belongsTo(\App\Models\Usosuelo::class, 'UsoSuelo_id');
    }

}
