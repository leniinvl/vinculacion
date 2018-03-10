<?php

namespace App\Repositories;

use App\Models\Precuaria;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrecuariaRepository
 * @package App\Repositories
 * @version March 10, 2018, 6:42 pm UTC
 *
 * @method Precuaria findWithoutFail($id, $columns = ['*'])
 * @method Precuaria find($id, $columns = ['*'])
 * @method Precuaria first($columns = ['*'])
*/
class PrecuariaRepository extends BaseRepository
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
        return Precuaria::class;
    }
}
