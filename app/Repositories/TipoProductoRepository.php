<?php

namespace App\Repositories;

use App\Models\TipoProducto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoProductoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:10 am UTC
 *
 * @method TipoProducto findWithoutFail($id, $columns = ['*'])
 * @method TipoProducto find($id, $columns = ['*'])
 * @method TipoProducto first($columns = ['*'])
*/
class TipoProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoProducto::class;
    }
}
