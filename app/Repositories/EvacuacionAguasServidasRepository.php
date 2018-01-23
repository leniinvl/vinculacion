<?php

namespace App\Repositories;

use App\Models\EvacuacionAguasServidas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EvacuacionAguasServidasRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:02 am UTC
 *
 * @method EvacuacionAguasServidas findWithoutFail($id, $columns = ['*'])
 * @method EvacuacionAguasServidas find($id, $columns = ['*'])
 * @method EvacuacionAguasServidas first($columns = ['*'])
*/
class EvacuacionAguasServidasRepository extends BaseRepository
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
        return EvacuacionAguasServidas::class;
    }
}
