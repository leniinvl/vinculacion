<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlandeGestiondeRiesgos
 * @package App\Models
 * @version March 12, 2018, 1:48 am UTC
 *
 * @property \App\Models\Agricultura agricultura
 * @property \App\Models\Amenaza amenaza
 * @property \App\Models\Origeningreso origeningreso
 * @property \App\Models\Tipoabono tipoabono
 * @property \App\Models\Tipoanimale tipoanimale
 * @property \App\Models\Tipocontrolplaga tipocontrolplaga
 * @property \App\Models\Tipocultivo tipocultivo
 * @property \App\Models\Vulnerabilidade vulnerabilidade
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
 * @property \Illuminate\Database\Eloquent\Collection Trabajadore
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property \Illuminate\Database\Eloquent\Collection usosvegetacionHasAreainfluenciaHasTipovegetal
 * @property string nombre
 * @property integer TipoAbono_id
 * @property integer TipoControlPlaga_id
 * @property integer TipoCultivos_id
 * @property integer TipoAnimales_id
 * @property integer cantidad_animales
 * @property integer OrigenIngresos_id
 * @property integer Agricultura_id
 * @property integer Amenazas_id
 * @property integer Vulnerabilidades_id
 */
class PlandeGestiondeRiesgos extends Model
{
    use SoftDeletes;

    public $table = 'plandegestionderiesgos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'TipoCultivos_id',
        'TipoAnimales_id',
        'cantidad_animales',
        'OrigenIngresos_id',
        'Agricultura_id',
        'Amenazas_id',
        'Vulnerabilidades_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'TipoAbono_id' => 'integer',
        'TipoControlPlaga_id' => 'integer',
        'TipoCultivos_id' => 'integer',
        'TipoAnimales_id' => 'integer',
        'cantidad_animales' => 'integer',
        'OrigenIngresos_id' => 'integer',
        'Agricultura_id' => 'integer',
        'Amenazas_id' => 'integer',
        'Vulnerabilidades_id' => 'integer'
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
    public function agricultura()
    {
        return $this->belongsTo(\App\Models\Agricultura::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function amenaza()
    {
        return $this->belongsTo(\App\Models\Amenaza::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function origeningreso()
    {
        return $this->belongsTo(\App\Models\Origeningreso::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoabono()
    {
        return $this->belongsTo(\App\Models\Tipoabono::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoanimale()
    {
        return $this->belongsTo(\App\Models\Tipoanimale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocontrolplaga()
    {
        return $this->belongsTo(\App\Models\Tipocontrolplaga::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocultivo()
    {
        return $this->belongsTo(\App\Models\Tipocultivo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vulnerabilidade()
    {
        return $this->belongsTo(\App\Models\Vulnerabilidade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function trabajadores()
    {
        return $this->hasMany(\App\Models\Trabajadore::class);
    }
}
