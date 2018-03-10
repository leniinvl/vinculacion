<?php

namespace App\Repositories;

use App\Models\TipoAnimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAnimalesRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:32 pm UTC
 *
 * @method TipoAnimales findWithoutFail($id, $columns = ['*'])
 * @method TipoAnimales find($id, $columns = ['*'])
 * @method TipoAnimales first($columns = ['*'])
*/
class TipoAnimalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'TipoProduccion_id',
        'TipoUnidad_id',
        'Destino_id',
        'Precuaria_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoAnimales::class;
    }
}
