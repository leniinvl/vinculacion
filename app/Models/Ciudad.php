<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ciudad
 * @package App\Models
 * @version March 15, 2018, 4:40 pm UTC
 *
 * @property string nombre
 * @property integer Pais_id
 */
class Ciudad extends Model
{
    use SoftDeletes;

    public $table = 'ciudad';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'nombre',
        'Pais_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'      => 'integer',
        'nombre'  => 'string',
        'Pais_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function pais()
    {
        return $this->belongsTo(\App\Models\Pais::class, 'Pais_id');
    }

}
