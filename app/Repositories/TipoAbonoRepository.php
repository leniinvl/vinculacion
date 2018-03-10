<?php

namespace App\Repositories;

use App\Models\tipoabono;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoabonoRepository
 * @package App\Repositories
 * @version March 10, 2018, 4:44 pm UTC
 *
 * @method tipoabono findWithoutFail($id, $columns = ['*'])
 * @method tipoabono find($id, $columns = ['*'])
 * @method tipoabono first($columns = ['*'])
*/
class tipoabonoRepository extends BaseRepository
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
        return tipoabono::class;
    }
}
