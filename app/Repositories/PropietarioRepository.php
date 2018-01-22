<?php

namespace App\Repositories;

use App\Models\Propietario;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PropietarioRepository
 * @package App\Repositories
 * @version January 18, 2018, 2:40 pm UTC
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
        'correo',
        'fechaNacimiento',
        'telefono',
        'observaciones',
        'genero'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Propietario::class;
    }
}
