<?php

namespace App\Repositories;

use App\Models\Tipodesecho;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipodesechoRepository
 * @package App\Repositories
 * @version March 11, 2018, 11:10 pm UTC
 *
 * @method Tipodesecho findWithoutFail($id, $columns = ['*'])
 * @method Tipodesecho find($id, $columns = ['*'])
 * @method Tipodesecho first($columns = ['*'])
*/
class TipodesechoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tipodesecho::class;
    }
}
