<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Desecho
 * @package App\Models
 * @version March 11, 2018, 11:10 pm UTC
 *
 * @property \App\Models\Biodigestor biodigestor
 * @property \App\Models\Tipodesecho tipodesecho
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasPeligros
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipofuentes
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTopologia
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTradicion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasUsotierra
 * @property \Illuminate\Database\Eloquent\Collection desechot
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
 * @property integer Biodigestor_id
 * @property integer TipoDesecho_id
 */
class Desecho extends Model
{
    use SoftDeletes;

    public $table = 'desecho';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'fecha',
        'peso',
        'Biodigestor_id',
        'TipoDesecho_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fecha' => 'date',
        'Biodigestor_id' => 'integer',
        'TipoDesecho_id' => 'integer'
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
    public function biodigestor()
    {
        return $this->belongsTo(\App\Models\Biodigestor::class,'Biodigestor_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipodesecho()
    {
        return $this->belongsTo(\App\Models\Tipodesecho::class,'TipoDesecho_id');
    }
}
