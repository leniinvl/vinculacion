<?php

namespace App\Repositories;

use App\Models\TipoAlimentosConsumo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoAlimentosConsumoRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:07 am UTC
 *
 * @method TipoAlimentosConsumo findWithoutFail($id, $columns = ['*'])
 * @method TipoAlimentosConsumo find($id, $columns = ['*'])
 * @method TipoAlimentosConsumo first($columns = ['*'])
*/
class TipoAlimentosConsumoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoAlimentosConsumo::class;
    }
}
