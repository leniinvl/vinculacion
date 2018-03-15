<?php

namespace App\Repositories;

use App\Models\Amenazas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AmenazasRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:46 pm UTC
 *
 * @method Amenazas findWithoutFail($id, $columns = ['*'])
 * @method Amenazas find($id, $columns = ['*'])
 * @method Amenazas first($columns = ['*'])
*/
class AmenazasRepository extends BaseRepository
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
        return Amenazas::class;
    }
}
