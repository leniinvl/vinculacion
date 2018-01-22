<?php

namespace App\Repositories;

use App\Models\TipoFuentes;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoFuentesRepository
 * @package App\Repositories
 * @version January 20, 2018, 4:26 am UTC
 *
 * @method TipoFuentes findWithoutFail($id, $columns = ['*'])
 * @method TipoFuentes find($id, $columns = ['*'])
 * @method TipoFuentes first($columns = ['*'])
*/
class TipoFuentesRepository extends BaseRepository
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
        return TipoFuentes::class;
    }
}
