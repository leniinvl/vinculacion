<?php

namespace App\Repositories;

use App\Models\Areainfluencia_has_peligros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Areainfluencia_has_peligrosRepository
 * @package App\Repositories
 * @version January 20, 2018, 9:30 pm UTC
 *
 * @method Areainfluencia_has_peligros findWithoutFail($id, $columns = ['*'])
 * @method Areainfluencia_has_peligros find($id, $columns = ['*'])
 * @method Areainfluencia_has_peligros first($columns = ['*'])
*/
class Areainfluencia_has_peligrosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Peligros_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Areainfluencia_has_peligros::class;
    }
}
