<?php

namespace App\Repositories;

use App\Models\PlanDeGestionDeRiesgos_Has_TipoAnimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanDeGestionDeRiesgos_Has_TipoAnimalesRepository
 * @package App\Repositories
 * @version March 19, 2018, 5:23 am UTC
 *
 * @method PlanDeGestionDeRiesgos_Has_TipoAnimales findWithoutFail($id, $columns = ['*'])
 * @method PlanDeGestionDeRiesgos_Has_TipoAnimales find($id, $columns = ['*'])
 * @method PlanDeGestionDeRiesgos_Has_TipoAnimales first($columns = ['*'])
*/
class PlanDeGestionDeRiesgos_Has_TipoAnimalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoAnimales_id',
        'cantidad_animales'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanDeGestionDeRiesgos_Has_TipoAnimales::class;
    }
}
