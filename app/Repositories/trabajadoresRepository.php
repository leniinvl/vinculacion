<?php

namespace App\Repositories;

use App\Models\trabajadores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class trabajadoresRepository
 * @package App\Repositories
 * @version January 18, 2018, 11:31 pm UTC
 *
 * @method trabajadores findWithoutFail($id, $columns = ['*'])
 * @method trabajadores find($id, $columns = ['*'])
 * @method trabajadores first($columns = ['*'])
*/
class trabajadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'sexo',
        'horasTrabajo',
        'salario',
        'PlanRiesgos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return trabajadores::class;
    }
}
