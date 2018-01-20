<table class="table table-responsive" id="areainfluencias-table">
    <thead>
        <tr>
            <th>Altitud</th>
        <th>Tipoterrenodescripcion</th>
        <th>Detallecalidadaire</th>
        <th>Detalleruido</th>
        <th>Observacionesecosistema</th>
        <th>Manejoambiental Id</th>
        <th>Calidadaire Id</th>
        <th>Tipoterreno Id</th>
        <th>Tiposuelo Id</th>
        <th>Calidadsuelo Id</th>
        <th>Precipitaciones Id</th>
        <th>Nivelfratico Id</th>
        <th>Permeabilidadsuelo Id</th>
        <th>Clima Id</th>
        <th>Condicionesdrenaje Id</th>
        <th>Ruido Id</th>
        <th>Recirculacionaire Id</th>
        <th>Ecosistema Id</th>
        <th>Organizacionsocial Id</th>
        <th>Tendenciatierra Id</th>
        <th>Abastecimientoagua Id</th>
        <th>Evacuacoinagualluvia Id</th>
        <th>Caracteristicasetnicas Id</th>
        <th>Consolidacionareainfluencia Id</th>
        <th>Evacuacionaguasservidas Id</th>
        <th>Lat</th>
        <th>Long</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areainfluencias as $areainfluencia)
        <tr>
            <td>{!! $areainfluencia->altitud !!}</td>
            <td>{!! $areainfluencia->tipoTerrenoDescripcion !!}</td>
            <td>{!! $areainfluencia->detalleCalidadAire !!}</td>
            <td>{!! $areainfluencia->detalleRuido !!}</td>
            <td>{!! $areainfluencia->observacionesEcosistema !!}</td>
            <td>{!! $areainfluencia->ManejoAmbiental_id !!}</td>
            <td>{!! $areainfluencia->CalidadAire_id !!}</td>
            <td>{!! $areainfluencia->TipoTerreno_id !!}</td>
            <td>{!! $areainfluencia->TipoSuelo_id !!}</td>
            <td>{!! $areainfluencia->CalidadSuelo_id !!}</td>
            <td>{!! $areainfluencia->Precipitaciones_id !!}</td>
            <td>{!! $areainfluencia->NivelFratico_id !!}</td>
            <td>{!! $areainfluencia->PermeabilidadSuelo_id !!}</td>
            <td>{!! $areainfluencia->Clima_id !!}</td>
            <td>{!! $areainfluencia->CondicionesDrenaje_id !!}</td>
            <td>{!! $areainfluencia->Ruido_id !!}</td>
            <td>{!! $areainfluencia->RecirculacionAire_id !!}</td>
            <td>{!! $areainfluencia->Ecosistema_id !!}</td>
            <td>{!! $areainfluencia->OrganizacionSocial_id !!}</td>
            <td>{!! $areainfluencia->TendenciaTierra_id !!}</td>
            <td>{!! $areainfluencia->AbastecimientoAgua_id !!}</td>
            <td>{!! $areainfluencia->EvacuacoinAguaLluvia_id !!}</td>
            <td>{!! $areainfluencia->CaracteristicasEtnicas_id !!}</td>
            <td>{!! $areainfluencia->ConsolidacionAreaInfluencia_id !!}</td>
            <td>{!! $areainfluencia->EvacuacionAguasServidas_id !!}</td>
            <td>{!! $areainfluencia->lat !!}</td>
            <td>{!! $areainfluencia->long !!}</td>
            <td>
                {!! Form::open(['route' => ['areainfluencias.destroy', $areainfluencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areainfluencias.show', [$areainfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areainfluencias.edit', [$areainfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>