<?php

namespace App\Repositories;

use App\Models\Lenguaje;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LenguajeRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:31 am UTC
 *
 * @method Lenguaje findWithoutFail($id, $columns = ['*'])
 * @method Lenguaje find($id, $columns = ['*'])
 * @method Lenguaje first($columns = ['*'])
*/
class LenguajeRepository extends BaseRepository
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
        return Lenguaje::class;
    }
}
