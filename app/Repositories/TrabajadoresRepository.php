<?php

namespace App\Repositories;

use App\Models\Trabajadores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabajadoresRepository
 * @package App\Repositories
 * @version March 20, 2018, 5:05 am UTC
 *
 * @method Trabajadores findWithoutFail($id, $columns = ['*'])
 * @method Trabajadores find($id, $columns = ['*'])
 * @method Trabajadores first($columns = ['*'])
*/
class TrabajadoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellido',
        'fechaDeNacimiento',
        'Genero_id',
        'Pais_id',
        'nacionalidad',
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
        return Trabajadores::class;
    }
}
