<?php

namespace App\Repositories;

use App\Models\EvacuacionAguaLluvia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EvacuacionAguaLluviaRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:29 am UTC
 *
 * @method EvacuacionAguaLluvia findWithoutFail($id, $columns = ['*'])
 * @method EvacuacionAguaLluvia find($id, $columns = ['*'])
 * @method EvacuacionAguaLluvia first($columns = ['*'])
*/
class EvacuacionAguaLluviaRepository extends BaseRepository
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
        return EvacuacionAguaLluvia::class;
    }
}
