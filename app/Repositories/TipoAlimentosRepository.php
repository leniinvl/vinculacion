<?php

namespace App\Repositories;

use App\Models\TipoAlimentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAlimentosRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:06 am UTC
 *
 * @method TipoAlimentos findWithoutFail($id, $columns = ['*'])
 * @method TipoAlimentos find($id, $columns = ['*'])
 * @method TipoAlimentos first($columns = ['*'])
*/
class TipoAlimentosRepository extends BaseRepository
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
        return TipoAlimentos::class;
    }
}
