<?php

namespace App\Repositories;

use App\Models\AreaInfluenciaHasTopologia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaHasTopologiaRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:58 am UTC
 *
 * @method AreaInfluenciaHasTopologia findWithoutFail($id, $columns = ['*'])
 * @method AreaInfluenciaHasTopologia find($id, $columns = ['*'])
 * @method AreaInfluenciaHasTopologia first($columns = ['*'])
*/
class AreaInfluenciaHasTopologiaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Topologia_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluenciaHasTopologia::class;
    }
}
