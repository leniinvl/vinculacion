<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_OrigenIngresos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_OrigenIngresosRepository
 * @package App\Repositories
 * @version March 19, 2018, 8:19 am UTC
 *
 * @method PlanRiesgos_Has_OrigenIngresos findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_OrigenIngresos find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_OrigenIngresos first($columns = ['*'])
*/
class PlanRiesgos_Has_OrigenIngresosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'OrigenIngresos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_OrigenIngresos::class;
    }
}
