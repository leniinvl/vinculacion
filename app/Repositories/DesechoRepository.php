<?php

namespace App\Repositories;

use App\Models\Desecho;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DesechoRepository
 * @package App\Repositories
 * @version March 11, 2018, 11:10 pm UTC
 *
 * @method Desecho findWithoutFail($id, $columns = ['*'])
 * @method Desecho find($id, $columns = ['*'])
 * @method Desecho first($columns = ['*'])
*/
class DesechoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha',
        'peso',
        'Biodigestor_id',
        'TipoDesecho_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Desecho::class;
    }
}
