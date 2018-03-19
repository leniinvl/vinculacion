<?php

namespace App\Repositories;

use App\Models\OrigenIngresos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrigenIngresosRepository
 * @package App\Repositories
 * @version March 19, 2018, 8:47 am UTC
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
        'nombre',
        'UnidadProduccion_id',
        'Propietario_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrigenIngresos::class;
    }
}
