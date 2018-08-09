<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version August 8, 2018, 6:02 am UTC
 *
 * @property \App\Models\Tipoestado tipoestado
 * @property \App\Models\Tipousuario tipousuario
 * @property string name
 * @property string email
 * @property string password
 * @property string remember_token
 * @property integer tipousuario_id
 * @property integer tipoestado_id
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'tipousuario_id',
        'tipoestado_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string',
        'tipousuario_id' => 'integer',
        'tipoestado_id' => 'integer'
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
    public function tipoestado()
    {
        return $this->belongsTo(\App\Models\Tipoestado::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipousuario()
    {
        return $this->belongsTo(\App\Models\Tipousuario::class);
    }
}
