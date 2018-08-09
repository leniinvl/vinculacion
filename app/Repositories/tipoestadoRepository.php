<?php

namespace App\Repositories;

use App\Models\tipoestado;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class tipoestadoRepository
 * @package App\Repositories
 * @version August 8, 2018, 5:51 am UTC
 *
 * @method tipoestado findWithoutFail($id, $columns = ['*'])
 * @method tipoestado find($id, $columns = ['*'])
 * @method tipoestado first($columns = ['*'])
*/
class tipoestadoRepository extends BaseRepository
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
        return tipoestado::class;
    }
}
