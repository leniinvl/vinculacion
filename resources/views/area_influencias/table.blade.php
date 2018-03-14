<table class="table table-responsive" id="areaInfluencias-table">
    <thead>
        <tr>
            <th>Altitud</th>
        <th>Tipoterrenodescripcion</th>
        <th>Detallecalidadaire</th>
        <th>Detalleruido</th>
        <th>Observacionesecosistema</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Manejoambiental Id</th>
        <th>Usosuelo Id</th>
        <th>Tiposuelo Id</th>
        <th>Precipitaciones Id</th>
        <th>Permeabilidadsuelo Id</th>
        <th>Clima Id</th>
        <th>Condicionesdrenaje Id</th>
        <th>Ruido Id</th>
        <th>Ecosistema Id</th>
        <th>Caracteristicasetnicas Id</th>
        <th>Niveltraficodescripcion</th>
        <th>Recirculacionairedescripcion</th>
        <th>Organizacionsocialdescripcion</th>
        <th>Tendenciatierradescripcion</th>
        <th>Abastecimientoaguadescripcion</th>
        <th>Evacuacionagualluviadescripcion</th>
        <th>Consolidacionareasinfluenciadescripcion</th>
        <th>Evacuacionaguasservidasdescripcion</th>
        <th>Usovegetaciondescripcion</th>
        <th>Tradicionesdescripcion</th>
        <th>Tipofuentesdescripcion</th>
            <th colspan="3">Action</th>
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
            <td>{!! $areaInfluencia->lat !!}</td>
            <td>{!! $areaInfluencia->long !!}</td>
            <td>{!! $areaInfluencia->ManejoAmbiental_id !!}</td>
            <td>{!! $areaInfluencia->usosuelo->nombre !!}</td>
            <td>{!! $areaInfluencia->TipoSuelo_id !!}</td>
            <td>{!! $areaInfluencia->Precipitaciones_id !!}</td>
            <td>{!! $areaInfluencia->PermeabilidadSuelo_id !!}</td>
            <td>{!! $areaInfluencia->Clima_id !!}</td>
            <td>{!! $areaInfluencia->CondicionesDrenaje->nombre !!}</td>
            <td>{!! $areaInfluencia->Ruido->valor !!}</td>
            <td>{!! $areaInfluencia->Ecosistema_id !!}</td>
            <td>{!! $areaInfluencia->CaracteristicasEtnicas_id !!}</td>
            <td>{!! $areaInfluencia->nivelTraficoDescripcion !!}</td>
            <td>{!! $areaInfluencia->recirculacionAireDescripcion !!}</td>
            <td>{!! $areaInfluencia->organizacionSocialDescripcion !!}</td>
            <td>{!! $areaInfluencia->tendenciaTierraDescripcion !!}</td>
            <td>{!! $areaInfluencia->abastecimientoAguaDescripcion !!}</td>
            <td>{!! $areaInfluencia->evacuacionAguaLluviaDescripcion !!}</td>
            <td>{!! $areaInfluencia->consolidacionAreasInfluenciaDescripcion !!}</td>
            <td>{!! $areaInfluencia->evacuacionAguasServidasDescripcion !!}</td>
            <td>{!! $areaInfluencia->usoVegetacionDescripcion !!}</td>
            <td>{!! $areaInfluencia->tradicionesDescripcion !!}</td>
            <td>{!! $areaInfluencia->tipoFuentesDescripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluencias.destroy', $areaInfluencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluencias.show', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluencias.edit', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
