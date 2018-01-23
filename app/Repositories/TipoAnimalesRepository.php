<?php

namespace App\Repositories;

use App\Models\TipoAnimales;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAnimalesRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:07 am UTC
 *
 * @method TipoAnimales findWithoutFail($id, $columns = ['*'])
 * @method TipoAnimales find($id, $columns = ['*'])
 * @method TipoAnimales first($columns = ['*'])
*/
class TipoAnimalesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'losCria'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoAnimales::class;
    }
}
