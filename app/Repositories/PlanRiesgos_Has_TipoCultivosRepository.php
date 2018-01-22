<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_TipoCultivos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_TipoCultivosRepository
 * @package App\Repositories
 * @version January 19, 2018, 9:25 pm UTC
 *
 * @method PlanRiesgos_Has_TipoCultivos findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoCultivos find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoCultivos first($columns = ['*'])
*/
class PlanRiesgos_Has_TipoCultivosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoCultivos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_TipoCultivos::class;
    }
}
