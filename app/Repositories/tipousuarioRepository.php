<?php

namespace App\Repositories;

use App\Models\tipousuario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipousuarioRepository
 * @package App\Repositories
 * @version August 6, 2018, 3:50 am UTC
 *
 * @method tipousuario findWithoutFail($id, $columns = ['*'])
 * @method tipousuario find($id, $columns = ['*'])
 * @method tipousuario first($columns = ['*'])
*/
class tipousuarioRepository extends BaseRepository
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
        return tipousuario::class;
    }
}
