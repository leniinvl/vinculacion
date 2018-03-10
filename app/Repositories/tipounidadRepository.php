<?php

namespace App\Repositories;

use App\Models\tipounidad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipounidadRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:34 pm UTC
 *
 * @method tipounidad findWithoutFail($id, $columns = ['*'])
 * @method tipounidad find($id, $columns = ['*'])
 * @method tipounidad first($columns = ['*'])
*/
class tipounidadRepository extends BaseRepository
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
        return tipounidad::class;
    }
}
