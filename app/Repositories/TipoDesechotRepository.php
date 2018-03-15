<?php

namespace App\Repositories;

use App\Models\TipoDesechot;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoDesechotRepository
 * @package App\Repositories
 * @version March 14, 2018, 9:37 pm UTC
 *
 * @method TipoDesechot findWithoutFail($id, $columns = ['*'])
 * @method TipoDesechot find($id, $columns = ['*'])
 * @method TipoDesechot first($columns = ['*'])
*/
class TipoDesechotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoDesechot::class;
    }
}
