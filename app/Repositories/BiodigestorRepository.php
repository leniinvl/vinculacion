<?php

namespace App\Repositories;

use App\Models\Biodigestor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BiodigestorRepository
 * @package App\Repositories
 * @version January 19, 2018, 7:25 pm UTC
 *
 * @method Biodigestor findWithoutFail($id, $columns = ['*'])
 * @method Biodigestor find($id, $columns = ['*'])
 * @method Biodigestor first($columns = ['*'])
*/
class BiodigestorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ubicacion',
        'tamañoPropiedad',
        'cantidadDesechos',
        'UnidadProduccion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Biodigestor::class;
    }
}
