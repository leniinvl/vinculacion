<?php

namespace App\Repositories;

use App\Models\precuaria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class precuariaRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:30 pm UTC
 *
 * @method precuaria findWithoutFail($id, $columns = ['*'])
 * @method precuaria find($id, $columns = ['*'])
 * @method precuaria first($columns = ['*'])
*/
class precuariaRepository extends BaseRepository
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
        return precuaria::class;
    }
}
