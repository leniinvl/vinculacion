<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanGestionRiesgos
 * @package App\Models
 * @version March 15, 2018, 5:47 am UTC
 *
 * @property \App\Models\Tipoabono tipoabono
 * @property \App\Models\Tipocontrolplaga tipocontrolplaga
 * @property \App\Models\Tipocultivo tipocultivo
 * @property \Illuminate\Database\Eloquent\Collection agricultura
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasLenguaje
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasReligion
 * @property \Illuminate\Database\Eloquent\Collection areainfluenciaHasTipovegetal
 * @property \Illuminate\Database\Eloquent\Collection desecho
 * @property \Illuminate\Database\Eloquent\Collection desechot
 * @property \Illuminate\Database\Eloquent\Collection origeningresos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAgricultura
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasOrigeningresos
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection Trabajadore
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property string nombre
 * @property integer TipoAbono_id
 * @property integer TipoControlPlaga_id
 * @property integer TipoCultivos_id
 */
class PlanGestionRiesgos extends Model
{
    use SoftDeletes;

    public $table = 'plangestionriesgos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'TipoCultivos_id'
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
        'TipoCultivos_id' => 'integer'
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
    public function tipoabono()
    {
        return $this->belongsTo(\App\Models\Tipoabono::class);
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function agriculturas()
    {
        return $this->belongsToMany(\App\Models\Agricultura::class, 'plandegestionderiesgos_has_agricultura');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function amenazas()
    {
        return $this->belongsToMany(\App\Models\Amenaza::class, 'plandegestionderiesgos_has_amenazas');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function origeningresos()
    {
        return $this->belongsToMany(\App\Models\Origeningreso::class, 'plandegestionderiesgos_has_origeningresos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tipoanimales()
    {
        return $this->belongsToMany(\App\Models\Tipoanimale::class, 'plandegestionderiesgos_has_tipoanimales');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vulnerabilidades()
    {
        return $this->belongsToMany(\App\Models\Vulnerabilidade::class, 'plandegestionderiesgos_has_vulnerabilidades');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function trabajadores()
    {
        return $this->hasMany(\App\Models\Trabajadore::class);
    }
}
