<?php

namespace App\Repositories;

use App\Models\Precipitaciones;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PrecipitacionesRepository
 * @package App\Repositories
 * @version January 19, 2018, 9:18 pm UTC
 *
 * @method Precipitaciones findWithoutFail($id, $columns = ['*'])
 * @method Precipitaciones find($id, $columns = ['*'])
 * @method Precipitaciones first($columns = ['*'])
*/
class PrecipitacionesRepository extends BaseRepository
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
        return Precipitaciones::class;
    }
}
