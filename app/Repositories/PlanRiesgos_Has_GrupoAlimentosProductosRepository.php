<?php

namespace App\Repositories;

use App\Models\PlanRiesgos_Has_GrupoAlimentosProductos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgos_Has_GrupoAlimentosProductosRepository
 * @package App\Repositories
 * @version January 22, 2018, 5:00 pm UTC
 *
 * @method PlanRiesgos_Has_GrupoAlimentosProductos findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos_Has_GrupoAlimentosProductos find($id, $columns = ['*'])
 * @method PlanRiesgos_Has_GrupoAlimentosProductos first($columns = ['*'])
*/
class PlanRiesgos_Has_GrupoAlimentosProductosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'GrupoAlimentosProductos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos_Has_GrupoAlimentosProductos::class;
    }
}
