<?php

namespace App\Repositories;

use App\Models\OrganizacionSocial;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OrganizacionSocialRepository
 * @package App\Repositories
 * @version January 19, 2018, 10:00 pm UTC
 *
 * @method OrganizacionSocial findWithoutFail($id, $columns = ['*'])
 * @method OrganizacionSocial find($id, $columns = ['*'])
 * @method OrganizacionSocial first($columns = ['*'])
*/
class OrganizacionSocialRepository extends BaseRepository
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
        return OrganizacionSocial::class;
    }
}
