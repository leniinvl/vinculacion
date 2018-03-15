<?php

namespace App\Repositories;

use App\Models\TipoAnimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAnimalesRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:41 pm UTC
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
        'Precuaria_id',
        'TipoUnidad_id',
        'TipoProduccion_id',
        'Destino_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoAnimales::class;
    }
}
