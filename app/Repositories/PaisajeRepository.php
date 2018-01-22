<?php

namespace App\Repositories;

use App\Models\Paisaje;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PaisajeRepository
 * @package App\Repositories
 * @version January 19, 2018, 10:06 pm UTC
 *
 * @method Paisaje findWithoutFail($id, $columns = ['*'])
 * @method Paisaje find($id, $columns = ['*'])
 * @method Paisaje first($columns = ['*'])
*/
class PaisajeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'AreaInfluencia_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Paisaje::class;
    }
}
