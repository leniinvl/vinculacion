<?php

namespace App\Repositories;

use App\Models\RecirculacionAire;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RecirculacionAireRepository
 * @package App\Repositories
 * @version January 18, 2018, 2:41 pm UTC
 *
 * @method RecirculacionAire findWithoutFail($id, $columns = ['*'])
 * @method RecirculacionAire find($id, $columns = ['*'])
 * @method RecirculacionAire first($columns = ['*'])
*/
class RecirculacionAireRepository extends BaseRepository
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
        return RecirculacionAire::class;
    }
}
