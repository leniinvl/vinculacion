<?php

namespace App\Repositories;

use App\Models\Genero;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GeneroRepository
 * @package App\Repositories
 * @version March 12, 2018, 2:13 am UTC
 *
 * @method Genero findWithoutFail($id, $columns = ['*'])
 * @method Genero find($id, $columns = ['*'])
 * @method Genero first($columns = ['*'])
*/
class GeneroRepository extends BaseRepository
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
        return Genero::class;
    }
}
