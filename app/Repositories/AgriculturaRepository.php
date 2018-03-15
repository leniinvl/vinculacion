<?php

namespace App\Repositories;

use App\Models\Agricultura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgriculturaRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:45 pm UTC
 *
 * @method Agricultura findWithoutFail($id, $columns = ['*'])
 * @method Agricultura find($id, $columns = ['*'])
 * @method Agricultura first($columns = ['*'])
*/
class AgriculturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'UnidadProduccion_id',
        'UsoSuelo_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agricultura::class;
    }
}
