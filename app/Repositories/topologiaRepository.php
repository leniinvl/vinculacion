<?php

namespace App\Repositories;

use App\Models\Topologia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TopologiaRepository
 * @package App\Repositories
 * @version January 20, 2018, 4:29 am UTC
 *
 * @method Topologia findWithoutFail($id, $columns = ['*'])
 * @method Topologia find($id, $columns = ['*'])
 * @method Topologia first($columns = ['*'])
*/
class TopologiaRepository extends BaseRepository
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
        return Topologia::class;
    }
}
