<?php

namespace App\Repositories;

use App\Models\Desechot;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DesechotRepository
 * @package App\Repositories
 * @version March 14, 2018, 9:38 pm UTC
 *
 * @method Desechot findWithoutFail($id, $columns = ['*'])
 * @method Desechot find($id, $columns = ['*'])
 * @method Desechot first($columns = ['*'])
*/
class DesechotRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'peso',
        'Taller_id',
        'TipoDesechoT_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Desechot::class;
    }
}
