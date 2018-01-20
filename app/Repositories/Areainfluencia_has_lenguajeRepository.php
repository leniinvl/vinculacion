<?php

namespace App\Repositories;

use App\Models\Areainfluencia_has_lenguaje;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Areainfluencia_has_lenguajeRepository
 * @package App\Repositories
 * @version January 20, 2018, 9:29 pm UTC
 *
 * @method Areainfluencia_has_lenguaje findWithoutFail($id, $columns = ['*'])
 * @method Areainfluencia_has_lenguaje find($id, $columns = ['*'])
 * @method Areainfluencia_has_lenguaje first($columns = ['*'])
*/
class Areainfluencia_has_lenguajeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Lenguaje_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Areainfluencia_has_lenguaje::class;
    }
}
