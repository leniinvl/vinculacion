<?php

namespace App\Repositories;

use App\Models\TipoAsociacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAsociacionRepository
 * @package App\Repositories
 * @version January 18, 2018, 5:56 am UTC
 *
 * @method TipoAsociacion findWithoutFail($id, $columns = ['*'])
 * @method TipoAsociacion find($id, $columns = ['*'])
 * @method TipoAsociacion first($columns = ['*'])
*/
class TipoAsociacionRepository extends BaseRepository
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
        return TipoAsociacion::class;
    }
}
