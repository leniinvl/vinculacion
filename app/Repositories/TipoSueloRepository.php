<?php

namespace App\Repositories;

use App\Models\TipoSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoSueloRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:11 am UTC
 *
 * @method TipoSuelo findWithoutFail($id, $columns = ['*'])
 * @method TipoSuelo find($id, $columns = ['*'])
 * @method TipoSuelo first($columns = ['*'])
*/
class TipoSueloRepository extends BaseRepository
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
        return TipoSuelo::class;
    }
}
