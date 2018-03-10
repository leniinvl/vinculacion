<?php

namespace App\Repositories;

use App\Models\Vulnerabilidades;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VulnerabilidadesRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:47 pm UTC
 *
 * @method Vulnerabilidades findWithoutFail($id, $columns = ['*'])
 * @method Vulnerabilidades find($id, $columns = ['*'])
 * @method Vulnerabilidades first($columns = ['*'])
*/
class VulnerabilidadesRepository extends BaseRepository
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
        return Vulnerabilidades::class;
    }
}
