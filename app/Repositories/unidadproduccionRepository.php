<?php

namespace App\Repositories;

use App\Models\unidadproduccion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class unidadproduccionRepository
 * @package App\Repositories
 * @version January 18, 2018, 11:29 pm UTC
 *
 * @method unidadproduccion findWithoutFail($id, $columns = ['*'])
 * @method unidadproduccion find($id, $columns = ['*'])
 * @method unidadproduccion first($columns = ['*'])
*/
class unidadproduccionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'lat',
        'lng',
        'observaciones',
        'Asociacion_id',
        'Producto_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return unidadproduccion::class;
    }
}
