<?php

namespace App\Repositories;

use App\Models\PlanRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PlanRiesgosRepository
 * @package App\Repositories
 * @version January 22, 2018, 4:53 pm UTC
 *
 * @method PlanRiesgos findWithoutFail($id, $columns = ['*'])
 * @method PlanRiesgos find($id, $columns = ['*'])
 * @method PlanRiesgos first($columns = ['*'])
*/
class PlanRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'feriaAgricola',
        'semillasPropias',
        'ConsumoPropio',
        'salarioFueraFinca',
        'productosGeneradosVendidos',
        'TipoAbono_id',
        'TipoControlPlaga_id',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanRiesgos::class;
    }
}
