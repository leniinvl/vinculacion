<?php

namespace App\Repositories;

use App\Models\TendenciaTierra;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TendenciaTierraRepository
 * @package App\Repositories
 * @version January 19, 2018, 2:34 am UTC
 *
 * @method TendenciaTierra findWithoutFail($id, $columns = ['*'])
 * @method TendenciaTierra find($id, $columns = ['*'])
 * @method TendenciaTierra first($columns = ['*'])
*/
class TendenciaTierraRepository extends BaseRepository
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
        return TendenciaTierra::class;
    }
}
