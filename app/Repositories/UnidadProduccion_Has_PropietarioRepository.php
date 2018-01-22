<?php

namespace App\Repositories;

use App\Models\UnidadProduccion_Has_Propietario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UnidadProduccion_Has_PropietarioRepository
 * @package App\Repositories
 * @version January 22, 2018, 4:02 pm UTC
 *
 * @method UnidadProduccion_Has_Propietario findWithoutFail($id, $columns = ['*'])
 * @method UnidadProduccion_Has_Propietario find($id, $columns = ['*'])
 * @method UnidadProduccion_Has_Propietario first($columns = ['*'])
*/
class UnidadProduccion_Has_PropietarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Propietario_ci'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UnidadProduccion_Has_Propietario::class;
    }
}
