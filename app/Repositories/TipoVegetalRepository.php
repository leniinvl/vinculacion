<?php

namespace App\Repositories;

use App\Models\TipoVegetal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoVegetalRepository
 * @package App\Repositories
 * @version March 14, 2018, 9:47 pm UTC
 *
 * @method TipoVegetal findWithoutFail($id, $columns = ['*'])
 * @method TipoVegetal find($id, $columns = ['*'])
 * @method TipoVegetal first($columns = ['*'])
*/
class TipoVegetalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre_comun',
        'nombre_cientifico'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoVegetal::class;
    }
}
