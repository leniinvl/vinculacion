<?php

namespace App\Repositories;

use App\Models\Areainfluencia_has_religion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Areainfluencia_has_religionRepository
 * @package App\Repositories
 * @version January 20, 2018, 9:30 pm UTC
 *
 * @method Areainfluencia_has_religion findWithoutFail($id, $columns = ['*'])
 * @method Areainfluencia_has_religion find($id, $columns = ['*'])
 * @method Areainfluencia_has_religion first($columns = ['*'])
*/
class Areainfluencia_has_religionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Religion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Areainfluencia_has_religion::class;
    }
}
