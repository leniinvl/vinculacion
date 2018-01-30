<div style="overflow-x:auto;">
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
            <td>{!! $areainfluencia->ManejoAmbiental->nombre !!}</td>
            <td>{!! $areainfluencia->CalidadAire->nombre !!}</td>
            <td>{!! $areainfluencia->TipoTerreno->nombre !!}</td>
            <td>{!! $areainfluencia->TipoSuelo->nombre !!}</td>
            <td>{!! $areainfluencia->CalidadSuelo->nombre !!}</td>
            <td>{!! $areainfluencia->Precipitaciones->nombre !!}</td>
            <td>{!! $areainfluencia->NivelFratico->nombre !!}</td>
            <td>{!! $areainfluencia->PermeabilidadSuelo->nombre !!}</td>
            <td>{!! $areainfluencia->Clima->nombre !!}</td>
            <td>{!! $areainfluencia->CondicionesDrenaje->nombre !!}</td>
            <td>{!! $areainfluencia->Ruido->nombre !!}</td>
            <td>{!! $areainfluencia->RecirculacionAire->nombre !!}</td>
            <td>{!! $areainfluencia->Ecosistema->nombre !!}</td>
            <td>{!! $areainfluencia->OrganizacionSocial->nombre !!}</td>
            <td>{!! $areainfluencia->TendenciaTierra->nombre !!}</td>
            <td>{!! $areainfluencia->AbastecimientoAgua->nombre !!}</td>
            <td>{!! $areainfluencia->EvacuacionAguaLluvia->nombre !!}</td>
            <td>{!! $areainfluencia->CaracteristicasEtnicas->nombre !!}</td>
            <td>{!! $areainfluencia->ConsolidacionAreaInfluencia->nombre !!}</td>
            <td>{!! $areainfluencia->EvacuacionAguasServidas->nombre !!}</td>
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
</div>