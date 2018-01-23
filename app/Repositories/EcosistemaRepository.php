<?php

namespace App\Repositories;

use App\Models\Ecosistema;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EcosistemaRepository
 * @package App\Repositories
 * @version January 23, 2018, 2:02 am UTC
 *
 * @method Ecosistema findWithoutFail($id, $columns = ['*'])
 * @method Ecosistema find($id, $columns = ['*'])
 * @method Ecosistema first($columns = ['*'])
*/
class EcosistemaRepository extends BaseRepository
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
        return Ecosistema::class;
    }
}
