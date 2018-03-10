<?php

namespace App\Repositories;

use App\Models\ciudad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ciudadRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:38 pm UTC
 *
 * @method ciudad findWithoutFail($id, $columns = ['*'])
 * @method ciudad find($id, $columns = ['*'])
 * @method ciudad first($columns = ['*'])
*/
class ciudadRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'Pais_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ciudad::class;
    }
}
