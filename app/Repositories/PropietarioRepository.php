<?php

namespace App\Repositories;

use App\Models\Propietario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropietarioRepository
 * @package App\Repositories
 * @version March 17, 2018, 6:47 pm UTC
 *
 * @method Propietario findWithoutFail($id, $columns = ['*'])
 * @method Propietario find($id, $columns = ['*'])
 * @method Propietario first($columns = ['*'])
*/
class PropietarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ci',
        'nombre',
        'Genero_id',
        'correo',
        'fechaNacimiento',
        'telefono',
        'observaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Propietario::class;
    }
}
