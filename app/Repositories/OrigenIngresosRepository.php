<?php

namespace App\Repositories;

use App\Models\OrigenIngresos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrigenIngresosRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:40 pm UTC
 *
 * @method OrigenIngresos findWithoutFail($id, $columns = ['*'])
 * @method OrigenIngresos find($id, $columns = ['*'])
 * @method OrigenIngresos first($columns = ['*'])
*/
class OrigenIngresosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Propietario_id',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrigenIngresos::class;
    }
}
