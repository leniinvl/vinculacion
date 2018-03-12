<?php

namespace App\Repositories;

use App\Models\Trabajadores;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TrabajadoresRepository
 * @package App\Repositories
 * @version March 12, 2018, 1:27 am UTC
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
        return Trabajadores::class;
    }
}
