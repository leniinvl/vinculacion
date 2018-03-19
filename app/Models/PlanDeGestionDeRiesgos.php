<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PlanDeGestionDeRiesgos
 * @package App\Models
 * @version March 15, 2018, 6:19 pm UTC
 *
 * @property string nombre
 * @property integer TipoAbono_id
 * @property integer TipoControlPlaga_id
 * @property integer TipoCultivos_id
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
        return $this->belongsTo(\App\Models\TipoAbono::class, 'TipoAbono_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocontrolplaga()
    {
        return $this->belongsTo(\App\Models\TipoControlPlaga::class, 'TipoControlPlaga_id');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipocultivos()
    {
        return $this->belongsTo(\App\Models\TipoCultivos::class, 'TipoCultivos_id');
    }

    public function origeningresos()
     {
       return $this->belongsToMany(\App\Models\Origeningresos::class, 'plandegestionderiesgos_has_origeningresos', 'plandegestionderiesgos_id', 'origeningresos_id')->withTimestamps();
     }

     public function tipoanimales()
     {
       return $this->belongsToMany(\App\Models\Tipoanimales::class, 'plandegestionderiesgos_has_tipoanimales', 'plandegestionderiesgos_id', 'tipoanimales_id')->withTimestamps();
     }

     public function amenazas()
     {
        return $this->belongsToMany(\App\Models\Amenazas::class, 'plandegestionderiesgos_has_Amenazas','plandegestionderiesgos_id', 'amenazas_id')->withTimestamps();
     }

}
