<?php

namespace App\Repositories;

use App\Models\AreaInfluenciaHasTipoVegetal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaHasTipoVegetalRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:57 am UTC
 *
 * @method AreaInfluenciaHasTipoVegetal findWithoutFail($id, $columns = ['*'])
 * @method AreaInfluenciaHasTipoVegetal find($id, $columns = ['*'])
 * @method AreaInfluenciaHasTipoVegetal first($columns = ['*'])
*/
class AreaInfluenciaHasTipoVegetalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoVegetal_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluenciaHasTipoVegetal::class;
    }
}
