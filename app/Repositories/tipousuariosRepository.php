<?php

namespace App\Repositories;

use App\Models\tipousuarios;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipousuariosRepository
 * @package App\Repositories
 * @version July 19, 2018, 4:25 am UTC
 *
 * @method tipousuarios findWithoutFail($id, $columns = ['*'])
 * @method tipousuarios find($id, $columns = ['*'])
 * @method tipousuarios first($columns = ['*'])
*/
class tipousuariosRepository extends BaseRepository
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
        return tipousuarios::class;
    }
}
