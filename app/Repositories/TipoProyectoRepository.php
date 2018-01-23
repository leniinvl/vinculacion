<?php

namespace App\Repositories;

use App\Models\TipoProyecto;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoProyectoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:10 am UTC
 *
 * @method TipoProyecto findWithoutFail($id, $columns = ['*'])
 * @method TipoProyecto find($id, $columns = ['*'])
 * @method TipoProyecto first($columns = ['*'])
*/
class TipoProyectoRepository extends BaseRepository
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
        return TipoProyecto::class;
    }
}
