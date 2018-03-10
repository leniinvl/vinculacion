<?php

namespace App\Repositories;

use App\Models\pais;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class paisRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:38 pm UTC
 *
 * @method pais findWithoutFail($id, $columns = ['*'])
 * @method pais find($id, $columns = ['*'])
 * @method pais first($columns = ['*'])
*/
class paisRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'nacionalidad'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pais::class;
    }
}
