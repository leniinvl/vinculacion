<?php

namespace App\Repositories;

use App\Models\CaracteristicasEtnicas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CaracteristicasEtnicasRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:59 am UTC
 *
 * @method CaracteristicasEtnicas findWithoutFail($id, $columns = ['*'])
 * @method CaracteristicasEtnicas find($id, $columns = ['*'])
 * @method CaracteristicasEtnicas first($columns = ['*'])
*/
class CaracteristicasEtnicasRepository extends BaseRepository
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
        return CaracteristicasEtnicas::class;
    }
}
