<?php

namespace App\Repositories;

use App\Models\Asociacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AsociacionRepository
 * @package App\Repositories
 * @version January 19, 2018, 7:23 pm UTC
 *
 * @method Asociacion findWithoutFail($id, $columns = ['*'])
 * @method Asociacion find($id, $columns = ['*'])
 * @method Asociacion first($columns = ['*'])
*/
class AsociacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'personaEncargada',
        'TipoAsociacion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asociacion::class;
    }
}
