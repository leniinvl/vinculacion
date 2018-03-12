<?php

namespace App\Repositories;

use App\Models\PlandeGestiondeRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlandeGestiondeRiesgosRepository
 * @package App\Repositories
 * @version March 12, 2018, 1:48 am UTC
 *
 * @method PlandeGestiondeRiesgos findWithoutFail($id, $columns = ['*'])
 * @method PlandeGestiondeRiesgos find($id, $columns = ['*'])
 * @method PlandeGestiondeRiesgos first($columns = ['*'])
*/
class PlandeGestiondeRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'TipoCultivos_id',
        'TipoAnimales_id',
        'cantidad_animales',
        'OrigenIngresos_id',
        'Agricultura_id',
        'Amenazas_id',
        'Vulnerabilidades_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlandeGestiondeRiesgos::class;
    }
}
