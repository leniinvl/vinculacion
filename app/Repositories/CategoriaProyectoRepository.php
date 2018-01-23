<?php

namespace App\Repositories;

use App\Models\CategoriaProyecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CategoriaProyectoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:00 am UTC
 *
 * @method CategoriaProyecto findWithoutFail($id, $columns = ['*'])
 * @method CategoriaProyecto find($id, $columns = ['*'])
 * @method CategoriaProyecto first($columns = ['*'])
*/
class CategoriaProyectoRepository extends BaseRepository
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
        return CategoriaProyecto::class;
    }
}
