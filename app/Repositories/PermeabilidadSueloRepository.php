<?php

namespace App\Repositories;

use App\Models\PermeabilidadSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermeabilidadSueloRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:38 am UTC
 *
 * @method PermeabilidadSuelo findWithoutFail($id, $columns = ['*'])
 * @method PermeabilidadSuelo find($id, $columns = ['*'])
 * @method PermeabilidadSuelo first($columns = ['*'])
*/
class PermeabilidadSueloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermeabilidadSuelo::class;
    }
}
