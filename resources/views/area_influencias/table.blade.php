<div style="overflow-x:auto;">
<table class="table table-responsive" id="areaInfluencias-table">
    <thead>
        <tr>
            <th>Altitud</th>
        <th>Descripción del tipo de terreno</th>
        <th>Detalle de calidad de aire</th>
        <th>Detalle de ruido</th>
        <th>Observaciones de ecosistema</th>
        <th>Religión</th>
        <th>Lenguaje</th>
        <th>Tipo Vegetal</th>
        <th>Lat</th>
        <th>Long</th>
        <th>Manejo ambiental</th>
        <th>Uso de suelo </th>
        <th>Tipo de suelo </th>
        <th>Permeabilidad de suelo </th>
        <th>Clima </th>
        <th>Condiciones de drenaje</th>
        <th>Ecosistema</th>
        <th>Caracteristicas étnicas </th>
        <th>Descripción de nivel de tráfico </th>
        <th>Descripción de recirculación de aire</th>
        <th>Descripción de organización social </th>
        <th>Descripción de tendencia de tierra</th>
        <th>Descripción de abastecimiento de agua</th>
        <th>Descripción de evacuación de agua lluvia</th>
        <th>Descripción de consolidación de areas de influencia</th>
        <th>Descripción de evacuación de aguas servidas</th>
        <th>Descripción de uso vegetación </th>
        <th>Descripción de tradiciones </th>
        <th>Descripción de tipo de fuentes </th>
        <th>Ruido</th>
        <th>Precipitaciones</th>
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
            <td>
            @foreach($areaInfluencia->religions as $areainfluenciaHasReligion)

                    {!! $areainfluenciaHasReligion->nombre !!}

            @endforeach
            </td>
            <td>
            @foreach($areaInfluencia->lenguajes as $areainfluenciaHasLenguaje)

                    {!! $areainfluenciaHasLenguaje->nombre !!}

            @endforeach
            </td>
            <td>
            @foreach($areaInfluencia->tipovegetals as $areaInfluenciaHasTipoVegetal)

                    {!! $areaInfluenciaHasTipoVegetal->nombre_comun !!}

            @endforeach
            </td>
            <td>{!! $areaInfluencia->lat !!}</td>
            <td>{!! $areaInfluencia->long !!}</td>
            <td>{!! $areaInfluencia->ManejoAmbiental->nombre !!}</td>
            <td>{!! $areaInfluencia->UsoSuelo->nombre !!}</td>
            <td>{!! $areaInfluencia->TipoSuelo->nombre !!}</td>
            <td>{!! $areaInfluencia->PermeabilidadSuelo->nombre !!}</td>
            <td>{!! $areaInfluencia->Clima->nombre !!}</td>
            <td>{!! $areaInfluencia->CondicionesDrenaje->nombre !!}</td>
            <td>{!! $areaInfluencia->Ecosistema->nombre !!}</td>
            <td>{!! $areaInfluencia->caracteristicasetnica->nombre !!}</td>
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
            <td>{!! $areaInfluencia->ruido !!}</td>
            <td>{!! $areaInfluencia->precipitaciones !!}</td>
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
</div>
