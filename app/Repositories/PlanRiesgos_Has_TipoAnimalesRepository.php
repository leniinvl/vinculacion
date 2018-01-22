<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_TipoAnimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_TipoAnimalesRepository
 * @package App\Repositories
 * @version January 19, 2018, 9:23 pm UTC
 *
 * @method PlanRiesgos_Has_TipoAnimales findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAnimales find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAnimales first($columns = ['*'])
*/
class PlanRiesgos_Has_TipoAnimalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoAnimales_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_TipoAnimales::class;
    }
}
