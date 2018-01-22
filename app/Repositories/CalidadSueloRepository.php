<?php

namespace App\Repositories;

use App\Models\CalidadSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CalidadSueloRepository
 * @package App\Repositories
 * @version January 18, 2018, 7:43 pm UTC
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
