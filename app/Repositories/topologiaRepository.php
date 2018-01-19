<?php

namespace App\Repositories;

use App\Models\topologia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class topologiaRepository
 * @package App\Repositories
 * @version January 18, 2018, 11:32 pm UTC
 *
 * @method topologia findWithoutFail($id, $columns = ['*'])
 * @method topologia find($id, $columns = ['*'])
 * @method topologia first($columns = ['*'])
*/
class topologiaRepository extends BaseRepository
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
        return topologia::class;
    }
}
