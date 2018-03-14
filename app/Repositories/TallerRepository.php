<?php

namespace App\Repositories;

use App\Models\Taller;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TallerRepository
 * @package App\Repositories
 * @version March 14, 2018, 9:40 pm UTC
 *
 * @method Taller findWithoutFail($id, $columns = ['*'])
 * @method Taller find($id, $columns = ['*'])
 * @method Taller first($columns = ['*'])
*/
class TallerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'riesgo',
        'imagen',
        'video',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Taller::class;
    }
}
