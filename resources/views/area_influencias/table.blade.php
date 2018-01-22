<table class="table table-responsive" id="areaInfluencias-table">
    <thead>
        <tr>
            <th>Manejoambiental</th>
            <th>Calidad de aire</th>
            <th>Tipo de terreno</th>
            <th>Tipo de suelo</th>
            <th>Calidad de suelo</th>
            <th>Precipitaciones</th>
            <th>Nivel fratico</th>
            <th>Permeabilidad de suelo</th>
            <th>Clima</th>
            <th>Condiciones de drenaje</th>
            <th>Ruido</th>
            <th>Recirculación de aire</th>
            <th>Ecosistema</th>
            <th>Organización social</th>
            <th>Tendencia de tierra</th>
            <th>Abastecimiento agua</th>
            <th>Evacuación de agua lluvia</th>
            <th>Caracteristicas etnicas</th>
            <th>Consolidación area influencia</th>
            <th>Evacuación aguas servidas</th>
            <th>Altitud</th>
            <th>Latitud</th>
            <th>Longitud</th>
            <th>Descripción tipo de terreno</th>
            <th>Detalle calidad de aire</th>
            <th>Detalle ruido</th>
            <th>Observaciones del ecosistema</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areaInfluencias as $areaInfluencia)
        <tr>
            <td>{!! $areaInfluencia->altitud !!}</td>
            <td>{!! $areaInfluencia->tipoTerrenoDescripcion !!}</td>
            <td>{!! $areaInfluencia->detalleCalidadAire !!}</td>
            <td>{!! $areaInfluencia->detalleRuido !!}</td>
            <td>{!! $areaInfluencia->observacionesEcosistema !!}</td>
            <td>{!! $areaInfluencia->ManejoAmbiental_id !!}</td>
            <td>{!! $areaInfluencia->CalidadAire_id !!}</td>
            <td>{!! $areaInfluencia->TipoTerreno_id !!}</td>
            <td>{!! $areaInfluencia->TipoSuelo_id !!}</td>
            <td>{!! $areaInfluencia->CalidadSuelo_id !!}</td>
            <td>{!! $areaInfluencia->Precipitaciones_id !!}</td>
            <td>{!! $areaInfluencia->NivelFratico_id !!}</td>
            <td>{!! $areaInfluencia->PermeabilidadSuelo_id !!}</td>
            <td>{!! $areaInfluencia->Clima_id !!}</td>
            <td>{!! $areaInfluencia->CondicionesDrenaje_id !!}</td>
            <td>{!! $areaInfluencia->Ruido_id !!}</td>
            <td>{!! $areaInfluencia->RecirculacionAire_id !!}</td>
            <td>{!! $areaInfluencia->Ecosistema_id !!}</td>
            <td>{!! $areaInfluencia->OrganizacionSocial_id !!}</td>
            <td>{!! $areaInfluencia->TendenciaTierra_id !!}</td>
            <td>{!! $areaInfluencia->AbastecimientoAgua_id !!}</td>
            <td>{!! $areaInfluencia->EvacuacoinAguaLluvia_id !!}</td>
            <td>{!! $areaInfluencia->CaracteristicasEtnicas_id !!}</td>
            <td>{!! $areaInfluencia->ConsolidacionAreaInfluencia_id !!}</td>
            <td>{!! $areaInfluencia->EvacuacionAguasServidas_id !!}</td>
            <td>{!! $areaInfluencia->lat !!}</td>
            <td>{!! $areaInfluencia->long !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluencias.destroy', $areaInfluencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluencias.show', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluencias.edit', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar el registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>