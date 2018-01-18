<?php

namespace App\Repositories;

use App\Models\Asociacion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AsociacionRepository
 * @package App\Repositories
 * @version January 18, 2018, 1:59 am UTC
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
