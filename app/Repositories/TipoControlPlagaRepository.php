<?php

namespace App\Repositories;

use App\Models\TipoControlPlaga;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoControlPlagaRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:38 pm UTC
 *
 * @method TipoControlPlaga findWithoutFail($id, $columns = ['*'])
 * @method TipoControlPlaga find($id, $columns = ['*'])
 * @method TipoControlPlaga first($columns = ['*'])
*/
class TipoControlPlagaRepository extends BaseRepository
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
        return TipoControlPlaga::class;
    }
}
