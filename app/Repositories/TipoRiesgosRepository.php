<?php

namespace App\Repositories;

use App\Models\TipoRiesgos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoRiesgosRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:11 am UTC
 *
 * @method TipoRiesgos findWithoutFail($id, $columns = ['*'])
 * @method TipoRiesgos find($id, $columns = ['*'])
 * @method TipoRiesgos first($columns = ['*'])
*/
class TipoRiesgosRepository extends BaseRepository
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
        return TipoRiesgos::class;
    }
}
