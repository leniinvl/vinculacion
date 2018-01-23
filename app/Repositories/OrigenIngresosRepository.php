<?php

namespace App\Repositories;

use App\Models\OrigenIngresos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrigenIngresosRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:04 am UTC
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
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrigenIngresos::class;
    }
}
