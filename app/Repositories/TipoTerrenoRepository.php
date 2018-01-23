<?php

namespace App\Repositories;

use App\Models\TipoTerreno;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoTerrenoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:12 am UTC
 *
 * @method TipoTerreno findWithoutFail($id, $columns = ['*'])
 * @method TipoTerreno find($id, $columns = ['*'])
 * @method TipoTerreno first($columns = ['*'])
*/
class TipoTerrenoRepository extends BaseRepository
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
        return TipoTerreno::class;
    }
}
