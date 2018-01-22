<?php

namespace App\Repositories;

use App\Models\NivelDeTrafico;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NivelDeTraficoRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:32 am UTC
 *
 * @method NivelDeTrafico findWithoutFail($id, $columns = ['*'])
 * @method NivelDeTrafico find($id, $columns = ['*'])
 * @method NivelDeTrafico first($columns = ['*'])
*/
class NivelDeTraficoRepository extends BaseRepository
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
        return NivelDeTrafico::class;
    }
}
