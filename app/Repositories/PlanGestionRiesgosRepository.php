<?php

namespace App\Repositories;

use App\Models\PlanGestionRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanGestionRiesgosRepository
 * @package App\Repositories
 * @version March 15, 2018, 7:39 am UTC
 *
 * @method PlanGestionRiesgos findWithoutFail($id, $columns = ['*'])
 * @method PlanGestionRiesgos find($id, $columns = ['*'])
 * @method PlanGestionRiesgos first($columns = ['*'])
*/
class PlanGestionRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'TipoCultivos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanGestionRiesgos::class;
    }
}
