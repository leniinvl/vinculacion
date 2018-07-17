<?php
namespace App\Repositories;
use App\Models\users;
use InfyOm\Generator\Common\BaseRepository;
/**
 * Class usersRepository
 * @package App\Repositories
 * @version July 13, 2018, 12:46 am UTC
 *
 * @method users findWithoutFail($id, $columns = ['*'])
 * @method users find($id, $columns = ['*'])
 * @method users first($columns = ['*'])
*/
class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
        'remember_token',
        'tipousuario_id'
    ];
    /**
     * Configure the Model
     **/
    public function model()
    {
        return users::class;
    }
}