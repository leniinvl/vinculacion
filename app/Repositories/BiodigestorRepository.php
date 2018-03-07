<?php

namespace App\Repositories;

use App\Models\Biodigestor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BiodigestorRepository
 * @package App\Repositories
 * @version March 7, 2018, 1:14 am UTC
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
        'imagen',
        'video',
        'anchoBio',
        'largoBio',
        'profundBio',
        'anchoCaja',
        'largoCaja',
        'profundCaja',
        'temperatura',
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
