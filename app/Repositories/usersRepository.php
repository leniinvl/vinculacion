<?php

namespace App\Repositories;

use App\Models\users;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version August 8, 2018, 6:02 am UTC
 *
 * @method users findWithoutFail($id, $columns = ['*'])
 * @method users find($id, $columns = ['*'])
 * @method users first($columns = ['*'])
*/
class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'remember_token',
        'tipousuario_id',
        'tipoestado_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}
