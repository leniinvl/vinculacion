<?php

namespace App\Repositories;

use App\Models\CalidadSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CalidadSueloRepository
 * @package App\Repositories
 * @version January 25, 2018, 1:05 am UTC
 *
 * @method CalidadSuelo findWithoutFail($id, $columns = ['*'])
 * @method CalidadSuelo find($id, $columns = ['*'])
 * @method CalidadSuelo first($columns = ['*'])
*/
class CalidadSueloRepository extends BaseRepository
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
        return CalidadSuelo::class;
    }
}
