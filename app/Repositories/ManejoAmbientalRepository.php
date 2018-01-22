<?php

namespace App\Repositories;

use App\Models\ManejoAmbiental;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ManejoAmbientalRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:32 am UTC
 *
 * @method ManejoAmbiental findWithoutFail($id, $columns = ['*'])
 * @method ManejoAmbiental find($id, $columns = ['*'])
 * @method ManejoAmbiental first($columns = ['*'])
*/
class ManejoAmbientalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'TipoProyecto_id',
        'CategoriaProyecto_id',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ManejoAmbiental::class;
    }
}
