<?php

namespace App\Repositories;

use App\Models\origeningresos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class origeningresosRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:17 pm UTC
 *
 * @method origeningresos findWithoutFail($id, $columns = ['*'])
 * @method origeningresos find($id, $columns = ['*'])
 * @method origeningresos first($columns = ['*'])
*/
class origeningresosRepository extends BaseRepository
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
        return origeningresos::class;
    }
}
