<?php

namespace App\Repositories;

use App\Models\Abastecimientoagua;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AbastecimientoaguaRepository
 * @package App\Repositories
 * @version January 20, 2018, 9:25 pm UTC
 *
 * @method Abastecimientoagua findWithoutFail($id, $columns = ['*'])
 * @method Abastecimientoagua find($id, $columns = ['*'])
 * @method Abastecimientoagua first($columns = ['*'])
*/
class AbastecimientoaguaRepository extends BaseRepository
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
        return Abastecimientoagua::class;
    }
}
