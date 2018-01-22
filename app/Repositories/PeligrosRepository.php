<?php

namespace App\Repositories;

use App\Models\Peligros;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeligrosRepository
 * @package App\Repositories
 * @version January 19, 2018, 10:08 pm UTC
 *
 * @method Peligros findWithoutFail($id, $columns = ['*'])
 * @method Peligros find($id, $columns = ['*'])
 * @method Peligros first($columns = ['*'])
*/
class PeligrosRepository extends BaseRepository
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
        return Peligros::class;
    }
}
