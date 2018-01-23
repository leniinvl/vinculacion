<?php

namespace App\Repositories;

use App\Models\CalidadAire;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CalidadAireRepository
 * @package App\Repositories
 * @version January 23, 2018, 1:59 am UTC
 *
 * @method CalidadAire findWithoutFail($id, $columns = ['*'])
 * @method CalidadAire find($id, $columns = ['*'])
 * @method CalidadAire first($columns = ['*'])
*/
class CalidadAireRepository extends BaseRepository
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
        return CalidadAire::class;
    }
}
