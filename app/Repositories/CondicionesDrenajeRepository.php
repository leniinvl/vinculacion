<?php

namespace App\Repositories;

use App\Models\CondicionesDrenaje;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CondicionesDrenajeRepository
 * @package App\Repositories
 * @version March 14, 2018, 5:42 am UTC
 *
 * @method CondicionesDrenaje findWithoutFail($id, $columns = ['*'])
 * @method CondicionesDrenaje find($id, $columns = ['*'])
 * @method CondicionesDrenaje first($columns = ['*'])
*/
class CondicionesDrenajeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CondicionesDrenaje::class;
    }
}
