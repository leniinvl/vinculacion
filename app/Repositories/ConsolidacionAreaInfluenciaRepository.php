<?php

namespace App\Repositories;

use App\Models\ConsolidacionAreaInfluencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConsolidacionAreaInfluenciaRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:01 am UTC
 *
 * @method ConsolidacionAreaInfluencia findWithoutFail($id, $columns = ['*'])
 * @method ConsolidacionAreaInfluencia find($id, $columns = ['*'])
 * @method ConsolidacionAreaInfluencia first($columns = ['*'])
*/
class ConsolidacionAreaInfluenciaRepository extends BaseRepository
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
        return ConsolidacionAreaInfluencia::class;
    }
}
