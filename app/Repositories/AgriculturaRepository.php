<?php

namespace App\Repositories;

use App\Models\Agricultura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgriculturaRepository
 * @package App\Repositories
 * @version March 12, 2018, 2:01 am UTC
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
        'UsoTierra_id',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agricultura::class;
    }
}
