<?php

namespace App\Repositories;

use App\Models\Ruido;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RuidoRepository
 * @package App\Repositories
 * @version March 14, 2018, 6:49 am UTC
 *
 * @method Ruido findWithoutFail($id, $columns = ['*'])
 * @method Ruido find($id, $columns = ['*'])
 * @method Ruido first($columns = ['*'])
*/
class RuidoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'valor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ruido::class;
    }
}
