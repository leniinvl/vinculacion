<?php

namespace App\Repositories;

use App\Models\TipoDesecho;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoDesechoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:09 am UTC
 *
 * @method TipoDesecho findWithoutFail($id, $columns = ['*'])
 * @method TipoDesecho find($id, $columns = ['*'])
 * @method TipoDesecho first($columns = ['*'])
*/
class TipoDesechoRepository extends BaseRepository
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
        return TipoDesecho::class;
    }
}
