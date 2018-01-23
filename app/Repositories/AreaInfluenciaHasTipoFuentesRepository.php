<?php

namespace App\Repositories;

use App\Models\AreaInfluenciaHasTipoFuentes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaHasTipoFuentesRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:57 am UTC
 *
 * @method AreaInfluenciaHasTipoFuentes findWithoutFail($id, $columns = ['*'])
 * @method AreaInfluenciaHasTipoFuentes find($id, $columns = ['*'])
 * @method AreaInfluenciaHasTipoFuentes first($columns = ['*'])
*/
class AreaInfluenciaHasTipoFuentesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoFuentes_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluenciaHasTipoFuentes::class;
    }
}
