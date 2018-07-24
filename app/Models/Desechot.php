<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Desechot
 * @package App\Models
 * @version March 14, 2018, 9:38 pm UTC
 *
 * @property \App\Models\Taller taller
 * @property \App\Models\Tipodesechot tipodesechot
 * @property \Illuminate\Database\Eloquent\Collection agricultura
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoagricultura
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection planriesgosHasTipocultivos
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property date fecha
 * @property decimal peso
 * @property integer Taller_id
 * @property integer TipoDesechoT_id
 */
class Desechot extends Model
{
    use SoftDeletes;

    public $table = 'desechot';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'fecha',
        'peso',
        'Taller_id',
        'TipoDesechoT_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'              => 'integer',
        'fecha'           => 'date',
        'Taller_id'       => 'integer',
        'TipoDesechoT_id' => 'integer',
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
    public function taller()
    {
        return $this->belongsTo(\App\Models\Taller::class, 'Taller_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipodesechot()
    {
        return $this->belongsTo(\App\Models\Tipodesechot::class, 'TipoDesechoT_id');
    }

    public function scopeName($query, $name)
    {
        if ($name != "") {
            $query->where('Taller_id', $name);
        }

    }

    public function scopeDate($query, $date1)
    {

        if ($date1 != "") {
            $query->where('fecha', '>=', $date1);
        }

    }

    public function scopeDate1($query, $date2)
    {

        if ($date2 != "") {
            $query->where('fecha', '<=', $date2);
        }

    }
}
