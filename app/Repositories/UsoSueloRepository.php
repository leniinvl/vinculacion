<?php

namespace App\Repositories;

use App\Models\UsoSuelo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsoSueloRepository
 * @package App\Repositories
 * @version March 14, 2018, 3:18 am UTC
 *
 * @method UsoSuelo findWithoutFail($id, $columns = ['*'])
 * @method UsoSuelo find($id, $columns = ['*'])
 * @method UsoSuelo first($columns = ['*'])
*/
class UsoSueloRepository extends BaseRepository
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
        return UsoSuelo::class;
    }
}
