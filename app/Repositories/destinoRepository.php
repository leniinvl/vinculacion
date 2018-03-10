<?php

namespace App\Repositories;

use App\Models\destino;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class destinoRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:33 pm UTC
 *
 * @method destino findWithoutFail($id, $columns = ['*'])
 * @method destino find($id, $columns = ['*'])
 * @method destino first($columns = ['*'])
*/
class destinoRepository extends BaseRepository
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
        return destino::class;
    }
}
