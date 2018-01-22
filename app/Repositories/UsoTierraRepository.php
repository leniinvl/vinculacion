<?php

namespace App\Repositories;

use App\Models\UsoTierra;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsoTierraRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:54 pm UTC
 *
 * @method UsoTierra findWithoutFail($id, $columns = ['*'])
 * @method UsoTierra find($id, $columns = ['*'])
 * @method UsoTierra first($columns = ['*'])
*/
class UsoTierraRepository extends BaseRepository
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
        return UsoTierra::class;
    }
}
