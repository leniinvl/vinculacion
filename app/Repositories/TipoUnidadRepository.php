<?php

namespace App\Repositories;

use App\Models\TipoUnidad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoUnidadRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:44 pm UTC
 *
 * @method TipoUnidad findWithoutFail($id, $columns = ['*'])
 * @method TipoUnidad find($id, $columns = ['*'])
 * @method TipoUnidad first($columns = ['*'])
*/
class TipoUnidadRepository extends BaseRepository
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
        return TipoUnidad::class;
    }
}
