<?php

namespace App\Repositories;

use App\Models\Agricultura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AgriculturaRepository
 * @package App\Repositories
 * @version March 19, 2018, 8:55 am UTC
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
        'nombre',
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
