<?php

namespace App\Repositories;

use App\Models\tipoanimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoanimalesRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:15 pm UTC
 *
 * @method tipoanimales findWithoutFail($id, $columns = ['*'])
 * @method tipoanimales find($id, $columns = ['*'])
 * @method tipoanimales first($columns = ['*'])
*/
class tipoanimalesRepository extends BaseRepository
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
        return tipoanimales::class;
    }
}
