<?php

namespace App\Repositories;

use App\Models\Religion;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ReligionRepository
 * @package App\Repositories
 * @version January 18, 2018, 2:42 pm UTC
 *
 * @method Religion findWithoutFail($id, $columns = ['*'])
 * @method Religion find($id, $columns = ['*'])
 * @method Religion first($columns = ['*'])
*/
class ReligionRepository extends BaseRepository
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
        return Religion::class;
    }
}
