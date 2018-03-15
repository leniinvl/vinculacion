<?php

namespace App\Repositories;

use App\Models\TipoCultivos;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoCultivosRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:41 pm UTC
 *
 * @method TipoCultivos findWithoutFail($id, $columns = ['*'])
 * @method TipoCultivos find($id, $columns = ['*'])
 * @method TipoCultivos first($columns = ['*'])
*/
class TipoCultivosRepository extends BaseRepository
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
        return TipoCultivos::class;
    }
}
