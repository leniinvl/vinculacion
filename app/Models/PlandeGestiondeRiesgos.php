<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanDeGestionDeRiesgos
 * @package App\Models
 * @version March 15, 2018, 1:35 am UTC
 *
 * @property \App\Models\Agricultura agricultura
 * @property \App\Models\Origeningreso origeningreso
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
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasAmenazas
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasTipoanimales
 * @property \Illuminate\Database\Eloquent\Collection plandegestionderiesgosHasVulnerabilidades
 * @property \Illuminate\Database\Eloquent\Collection Trabajadore
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccion
 * @property \Illuminate\Database\Eloquent\Collection unidadproduccionHasPropietario
 * @property string nombre
 * @property integer TipoAbono_id
 * @property integer TipoControlPlaga_id
 * @property integer TipoCultivos_id
 * @property integer OrigenIngresos_id
 * @property integer Agricultura_id
 */
class PlanDeGestionDeRiesgos extends Model
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
        'OrigenIngresos_id',
        'Agricultura_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                  => 'integer',
        'nombre'              => 'string',
        'TipoAbono_id'        => 'integer',
        'TipoControlPlaga_id' => 'integer',
        'TipoCultivos_id'     => 'integer',
        'OrigenIngresos_id'   => 'integer',
        'Agricultura_id'      => 'integer',
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
        return $this->belongsTo(\App\Models\Agricultura::class, 'Agricultura_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function origeningreso()
    {
        return $this->belongsTo(\App\Models\Origeningreso::class, 'OrigenIngresos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoabono()
    {
        return $this->belongsTo(\App\Models\Tipoabono::class, 'TipoAbono_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocontrolplaga()
    {
        return $this->belongsTo(\App\Models\Tipocontrolplaga::class, 'TipoControlPlaga_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocultivo()
    {
        return $this->belongsTo(\App\Models\Tipocultivo::class, 'TipoCultivos_id');
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
