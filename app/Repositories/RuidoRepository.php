<?php

namespace App\Repositories;

use App\Models\Ruido;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RuidoRepository
 * @package App\Repositories
 * @version January 18, 2018, 2:42 pm UTC
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
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ruido::class;
    }
}
