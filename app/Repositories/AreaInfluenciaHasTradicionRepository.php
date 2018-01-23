<?php

namespace App\Repositories;

use App\Models\AreaInfluenciaHasTradicion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaHasTradicionRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:58 am UTC
 *
 * @method AreaInfluenciaHasTradicion findWithoutFail($id, $columns = ['*'])
 * @method AreaInfluenciaHasTradicion find($id, $columns = ['*'])
 * @method AreaInfluenciaHasTradicion first($columns = ['*'])
*/
class AreaInfluenciaHasTradicionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Tradicion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluenciaHasTradicion::class;
    }
}
