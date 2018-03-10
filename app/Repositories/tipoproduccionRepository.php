<?php

namespace App\Repositories;

use App\Models\tipoproduccion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoproduccionRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:34 pm UTC
 *
 * @method tipoproduccion findWithoutFail($id, $columns = ['*'])
 * @method tipoproduccion find($id, $columns = ['*'])
 * @method tipoproduccion first($columns = ['*'])
*/
class tipoproduccionRepository extends BaseRepository
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
        return tipoproduccion::class;
    }
}
