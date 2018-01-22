<?php

namespace App\Repositories;

use App\Models\UsosVegetacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsosVegetacionRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:59 pm UTC
 *
 * @method UsosVegetacion findWithoutFail($id, $columns = ['*'])
 * @method UsosVegetacion find($id, $columns = ['*'])
 * @method UsosVegetacion first($columns = ['*'])
*/
class UsosVegetacionRepository extends BaseRepository
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
        return UsosVegetacion::class;
    }
}
