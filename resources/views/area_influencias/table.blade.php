<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="areaInfluencias-table" type="text" class="form-control" placeholder="Buscar">
</div>
<div style="overflow-x:auto;">
<table class="table table-responsive" id="areaInfluencias-table">
    <thead>
        <tr>
            <th>Altitud</th>
            <th>Lat</th>
            <th>Long</th>
        <th>Descripción del tipo de terreno</th>
        <th>Calidad de aire</th>
        <th>Detalle de ruido</th>
        <th>Observaciones de ecosistema</th>
        <th>Religión</th>
        <th>Lenguaje</th>
        <th>Tipo Vegetal</th>
        <th>Manejo ambiental</th>
        <th>Uso de suelo </th>
        <th>Tipo de suelo </th>
        <th>Permeabilidad de suelo </th>
        <th>Clima </th>
        <th>Condiciones de drenaje</th>
        <th>Ecosistema</th>
        <th>Caracteristicas étnicas </th>
        <th>Nivel de tráfico </th>
        <th>Recirculación de aire</th>
        <th>Organización social </th>
        <th>Tendencia de tierra</th>
        <th>Abastecimiento de agua</th>
        <th>Evacuación de agua lluvia</th>
        <th>Consolidación de areas de influencia</th>
        <th>Evacuación de aguas servidas</th>
        <th>Uso vegetación </th>
        <th>Descripción de tradiciones </th>
        <th>Descripción de tipo de fuentes </th>
        <th>Ruido</th>
        <th>Precipitaciones</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($areaInfluencias as $areaInfluencia)
        <tr>
            <td>{!! $areaInfluencia->altitud !!}</td>
            <td>{!! $areaInfluencia->lat !!}</td>
            <td>{!! $areaInfluencia->long !!}</td>
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
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('areaInfluencias.show', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluencias.edit', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                   
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
				@if(Auth::user()->tipousuario_id===2)
			<a href="{!! route('areaInfluencias.show', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluencias.edit', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
				@else
			<a href="{!! route('areaInfluencias.show', [$areaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
				@endif	
                     @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<script>
  $(document).ready(function () {
     $('#areaInfluencias-table').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
          $('.contenidobusqueda tr').hide();
          $('.contenidobusqueda tr').filter(function () {
              return rex.test($(this).text());
          }).show();

          })

  });
  </script>