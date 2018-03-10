<?php

namespace App\Repositories;

use App\Models\vulnerabilidades;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class vulnerabilidadesRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:37 pm UTC
 *
 * @method vulnerabilidades findWithoutFail($id, $columns = ['*'])
 * @method vulnerabilidades find($id, $columns = ['*'])
 * @method vulnerabilidades first($columns = ['*'])
*/
class vulnerabilidadesRepository extends BaseRepository
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
        return vulnerabilidades::class;
    }
}
