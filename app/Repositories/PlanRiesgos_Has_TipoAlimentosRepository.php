<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_TipoAlimentos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_TipoAlimentosRepository
 * @package App\Repositories
 * @version January 19, 2018, 9:21 pm UTC
 *
 * @method PlanRiesgos_Has_TipoAlimentos findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAlimentos find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAlimentos first($columns = ['*'])
*/
class PlanRiesgos_Has_TipoAlimentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoAlimentos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_TipoAlimentos::class;
    }
}
