<?php

namespace App\Repositories;

use App\Models\Areainfluencia_has_usotierra;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Areainfluencia_has_usotierraRepository
 * @package App\Repositories
 * @version January 19, 2018, 7:30 pm UTC
 *
 * @method Areainfluencia_has_usotierra findWithoutFail($id, $columns = ['*'])
 * @method Areainfluencia_has_usotierra find($id, $columns = ['*'])
 * @method Areainfluencia_has_usotierra first($columns = ['*'])
*/
class Areainfluencia_has_usotierraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UsoTierra_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Areainfluencia_has_usotierra::class;
    }
}
