<?php

namespace App\Repositories;

use App\Models\trabajadores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class trabajadoresRepository
 * @package App\Repositories
 * @version March 10, 2018, 5:32 pm UTC
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
        'apellido',
        'genero',
        'fechaDeNacimiento',
        'Pais_id',
        'Ciudad_id',
        'instruccionFormal',
        'horasTrabajo',
        'salario',
        'PlanDeGestionDeRiesgos_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return trabajadores::class;
    }
}
