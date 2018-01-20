<?php

namespace App\Repositories;

use App\Models\tradicion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tradicionRepository
 * @package App\Repositories
 * @version January 18, 2018, 11:30 pm UTC
 *
 * @method tradicion findWithoutFail($id, $columns = ['*'])
 * @method tradicion find($id, $columns = ['*'])
 * @method tradicion first($columns = ['*'])
*/
class tradicionRepository extends BaseRepository
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
        return tradicion::class;
    }
}
