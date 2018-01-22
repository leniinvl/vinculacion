<?php

namespace App\Repositories;

use App\Models\Tradicion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TradicionRepository
 * @package App\Repositories
 * @version January 20, 2018, 4:31 am UTC
 *
 * @method Tradicion findWithoutFail($id, $columns = ['*'])
 * @method Tradicion find($id, $columns = ['*'])
 * @method Tradicion first($columns = ['*'])
*/
class TradicionRepository extends BaseRepository
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
        return Tradicion::class;
    }
}
