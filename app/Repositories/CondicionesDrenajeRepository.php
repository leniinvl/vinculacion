<?php

namespace App\Repositories;

use App\Models\CondicionesDrenaje;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CondicionesDrenajeRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:01 am UTC
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
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CondicionesDrenaje::class;
    }
}
