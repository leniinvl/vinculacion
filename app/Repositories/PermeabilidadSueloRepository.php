<?php

namespace App\Repositories;

use App\Models\PermeabilidadSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PermeabilidadSueloRepository
 * @package App\Repositories
 * @version January 19, 2018, 10:09 pm UTC
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
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PermeabilidadSuelo::class;
    }
}
