<?php

namespace App\Repositories;

use App\Models\TipoVegetal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoVegetalRepository
 * @package App\Repositories
 * @version January 20, 2018, 4:28 am UTC
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
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoVegetal::class;
    }
}
