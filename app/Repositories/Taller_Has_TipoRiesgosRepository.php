<?php

namespace App\Repositories;

use App\Models\Taller_Has_TipoRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Taller_Has_TipoRiesgosRepository
 * @package App\Repositories
 * @version January 19, 2018, 2:33 am UTC
 *
 * @method Taller_Has_TipoRiesgos findWithoutFail($id, $columns = ['*'])
 * @method Taller_Has_TipoRiesgos find($id, $columns = ['*'])
 * @method Taller_Has_TipoRiesgos first($columns = ['*'])
*/
class Taller_Has_TipoRiesgosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoRiesgos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Taller_Has_TipoRiesgos::class;
    }
}
