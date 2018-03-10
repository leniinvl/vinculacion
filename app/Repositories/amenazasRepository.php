<?php

namespace App\Repositories;

use App\Models\amenazas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class amenazasRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:36 pm UTC
 *
 * @method amenazas findWithoutFail($id, $columns = ['*'])
 * @method amenazas find($id, $columns = ['*'])
 * @method amenazas first($columns = ['*'])
*/
class amenazasRepository extends BaseRepository
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
        return amenazas::class;
    }
}
