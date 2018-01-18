<?php

namespace App\Repositories;

use App\Models\Taller;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TallerRepository
 * @package App\Repositories
 * @version January 18, 2018, 2:42 pm UTC
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
