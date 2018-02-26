<?php

namespace App\Repositories;

use App\Models\GrupoAlimentosProductos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GrupoAlimentosProductosRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:31 am UTC
 *
 * @method GrupoAlimentosProductos findWithoutFail($id, $columns = ['*'])
 * @method GrupoAlimentosProductos find($id, $columns = ['*'])
 * @method GrupoAlimentosProductos first($columns = ['*'])
*/
class GrupoAlimentosProductosRepository extends BaseRepository
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
        return GrupoAlimentosProductos::class;
    }
}
