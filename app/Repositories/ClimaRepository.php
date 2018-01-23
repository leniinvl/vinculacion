<?php

namespace App\Repositories;

use App\Models\Clima;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ClimaRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:00 am UTC
 *
 * @method Clima findWithoutFail($id, $columns = ['*'])
 * @method Clima find($id, $columns = ['*'])
 * @method Clima first($columns = ['*'])
*/
class ClimaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'mnsm'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Clima::class;
    }
}
