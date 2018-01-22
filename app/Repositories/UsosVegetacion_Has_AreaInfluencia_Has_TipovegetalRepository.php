<?php

namespace App\Repositories;

use App\Models\UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRepository
 * @package App\Repositories
 * @version January 22, 2018, 3:56 pm UTC
 *
 * @method UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal findWithoutFail($id, $columns = ['*'])
 * @method UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal find($id, $columns = ['*'])
 * @method UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal first($columns = ['*'])
*/
class UsosVegetacion_Has_AreaInfluencia_Has_TipovegetalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'AreaInfluencia_has_TipoVegetal_AreaInfluencia_id',
        'AreaInfluencia_has_TipoVegetal_TipoVegetal_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UsosVegetacion_Has_AreaInfluencia_Has_Tipovegetal::class;
    }
}
