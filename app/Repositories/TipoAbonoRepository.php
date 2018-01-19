<?php

namespace App\Repositories;

use App\Models\TipoAbono;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAbonoRepository
 * @package App\Repositories
 * @version January 19, 2018, 2:35 am UTC
 *
 * @method TipoAbono findWithoutFail($id, $columns = ['*'])
 * @method TipoAbono find($id, $columns = ['*'])
 * @method TipoAbono first($columns = ['*'])
*/
class TipoAbonoRepository extends BaseRepository
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
        return TipoAbono::class;
    }
}
