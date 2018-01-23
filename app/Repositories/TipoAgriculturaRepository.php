<?php

namespace App\Repositories;

use App\Models\TipoAgricultura;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAgriculturaRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:05 am UTC
 *
 * @method TipoAgricultura findWithoutFail($id, $columns = ['*'])
 * @method TipoAgricultura find($id, $columns = ['*'])
 * @method TipoAgricultura first($columns = ['*'])
*/
class TipoAgriculturaRepository extends BaseRepository
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
        return TipoAgricultura::class;
    }
}
