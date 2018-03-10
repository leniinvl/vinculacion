<?php

namespace App\Repositories;

use App\Models\Ciudad;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CiudadRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:48 pm UTC
 *
 * @method Ciudad findWithoutFail($id, $columns = ['*'])
 * @method Ciudad find($id, $columns = ['*'])
 * @method Ciudad first($columns = ['*'])
*/
class CiudadRepository extends BaseRepository
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
        return Ciudad::class;
    }
}
