<?php

namespace App\Repositories;

use App\Models\AreaInfluencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreaInfluenciaRepository
 * @package App\Repositories
 * @version January 19, 2018, 7:27 pm UTC
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
        'ManejoAmbiental_id',
        'CalidadAire_id',
        'TipoTerreno_id',
        'TipoSuelo_id',
        'CalidadSuelo_id',
        'Precipitaciones_id',
        'NivelFratico_id',
        'PermeabilidadSuelo_id',
        'Clima_id',
        'CondicionesDrenaje_id',
        'Ruido_id',
        'RecirculacionAire_id',
        'Ecosistema_id',
        'OrganizacionSocial_id',
        'TendenciaTierra_id',
        'AbastecimientoAgua_id',
        'EvacuacoinAguaLluvia_id',
        'CaracteristicasEtnicas_id',
        'ConsolidacionAreaInfluencia_id',
        'EvacuacionAguasServidas_id',
        'lat',
        'long'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AreaInfluencia::class;
    }
}
