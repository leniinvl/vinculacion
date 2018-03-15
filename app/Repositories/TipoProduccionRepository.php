<?php

namespace App\Repositories;

use App\Models\TipoProduccion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoProduccionRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:43 pm UTC
 *
 * @method TipoProduccion findWithoutFail($id, $columns = ['*'])
 * @method TipoProduccion find($id, $columns = ['*'])
 * @method TipoProduccion first($columns = ['*'])
*/
class TipoProduccionRepository extends BaseRepository
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
        return TipoProduccion::class;
    }
}
