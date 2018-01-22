<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_TipoAgricultura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_TipoAgriculturaRepository
 * @package App\Repositories
 * @version January 22, 2018, 5:09 pm UTC
 *
 * @method PlanRiesgos_Has_TipoAgricultura findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAgricultura find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_TipoAgricultura first($columns = ['*'])
*/
class PlanRiesgos_Has_TipoAgriculturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoAgricultura_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_TipoAgricultura::class;
    }
}
