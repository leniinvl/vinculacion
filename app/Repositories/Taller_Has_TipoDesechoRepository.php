<?php

namespace App\Repositories;

use App\Models\Taller_Has_TipoDesecho;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Taller_Has_TipoDesechoRepository
 * @package App\Repositories
 * @version January 19, 2018, 2:26 am UTC
 *
 * @method Taller_Has_TipoDesecho findWithoutFail($id, $columns = ['*'])
 * @method Taller_Has_TipoDesecho find($id, $columns = ['*'])
 * @method Taller_Has_TipoDesecho first($columns = ['*'])
*/
class Taller_Has_TipoDesechoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'TipoDesecho_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Taller_Has_TipoDesecho::class;
    }
}
