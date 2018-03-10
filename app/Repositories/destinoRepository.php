<?php

namespace App\Repositories;

use App\Models\Destino;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DestinoRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:43 pm UTC
 *
 * @method Destino findWithoutFail($id, $columns = ['*'])
 * @method Destino find($id, $columns = ['*'])
 * @method Destino first($columns = ['*'])
*/
class DestinoRepository extends BaseRepository
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
        return Destino::class;
    }
}
