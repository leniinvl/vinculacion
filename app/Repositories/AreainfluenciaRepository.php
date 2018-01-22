<?php

namespace App\Repositories;

use App\Models\Areainfluencia;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AreainfluenciaRepository
 * @package App\Repositories
 * @version January 20, 2018, 9:28 pm UTC
 *
 * @method Areainfluencia findWithoutFail($id, $columns = ['*'])
 * @method Areainfluencia find($id, $columns = ['*'])
 * @method Areainfluencia first($columns = ['*'])
*/
class AreainfluenciaRepository extends BaseRepository
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
        return Areainfluencia::class;
    }
}
