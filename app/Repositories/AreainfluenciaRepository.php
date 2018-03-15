<?php

namespace App\Repositories;

use App\Models\AreaInfluencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaRepository
 * @package App\Repositories
 * @version March 15, 2018, 4:15 am UTC
 *
 * @method AreaInfluencia findWithoutFail($id, $columns = ['*'])
 * @method AreaInfluencia find($id, $columns = ['*'])
 * @method AreaInfluencia first($columns = ['*'])
*/
class AreaInfluenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'altitud',
        'tipoTerrenoDescripcion',
        'detalleCalidadAire',
        'detalleRuido',
        'observacionesEcosistema',
        'lat',
        'long',
        'ManejoAmbiental_id',
        'UsoSuelo_id',
        'TipoSuelo_id',
        'PermeabilidadSuelo_id',
        'Clima_id',
        'CondicionesDrenaje_id',
        'Ecosistema_id',
        'CaracteristicasEtnicas_id',
        'nivelTraficoDescripcion',
        'recirculacionAireDescripcion',
        'organizacionSocialDescripcion',
        'tendenciaTierraDescripcion',
        'abastecimientoAguaDescripcion',
        'evacuacionAguaLluviaDescripcion',
        'consolidacionAreasInfluenciaDescripcion',
        'evacuacionAguasServidasDescripcion',
        'usoVegetacionDescripcion',
        'tradicionesDescripcion',
        'tipoFuentesDescripcion',
        'ruido',
        'precipitaciones'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluencia::class;
    }
}
