<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="areaInfluencias-table" type="text" class="form-control" placeholder="Buscar">
</div>
<div style="overflow-x:auto;">
<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>


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
<!-- area de impresion -->
<div style="display:none;font-size:.5em"  id="areaImprimir" >
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ce/UTE_new_logo.jpg" class="img-rounded" alt="Cinque Terre" width="60" height="60">
                <img src="http://www.pichincha.gob.ec/images/logo/logo2.png" class="img-rounded" alt="Cinque Terre">
                <img src="http://www.devbrain-it.net/wp-content/uploads/2018/07/logoPacto-1.jpg" class="img-rounded" alt="Cinque Terre"  height="40" >
    <h3><center>Reporte</center></h3>
<table id="areaInfluencias-table" style="font-family: Lucida Sans Unicode, Lucida Grande, Sans-Serif;
                font-size: 12px;
                width: 480px;
                margin-left: auto;
                margin-right: auto;
                border: 4px solid #aabcfe;
                background: #d0dafd">
    <thead>
        <tr style="font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;">
            <th style="background: #d0dafd;
                color: #339;">Altitud</th>
            <th style="background: #d0dafd;
                color: #339;">Lat</th>
            <th style="background: #d0dafd;
                color: #339;">Long</th>
        <th style="background: #d0dafd;
                color: #339;">Descripción del tipo de terreno</th>
        <th style="background: #d0dafd;
                color: #339;">Calidad de aire</th>
        <th style="background: #d0dafd;
                color: #339;">Detalle de ruido</th>
        <th style="background: #d0dafd;
                color: #339;">Observaciones de ecosistema</th>
        <th style="background: #d0dafd;
                color: #339;">Religión</th>
        <th style="background: #d0dafd;
                color: #339;">Lenguaje</th>
        <th style="background: #d0dafd;
                color: #339;">Tipo Vegetal</th>
        <th style="background: #d0dafd;
                color: #339;">Manejo ambiental</th>
        <th style="background: #d0dafd;
                color: #339;">Uso de suelo </th>
        <th style="background: #d0dafd;
                color: #339;">Tipo de suelo </th>
        <th style="background: #d0dafd;
                color: #339;">Permeabilidad de suelo </th>
        <th style="background: #d0dafd;
                color: #339;">Clima </th>
        <th style="background: #d0dafd;
                color: #339;">Condiciones de drenaje</th>
        <th style="background: #d0dafd;
                color: #339;">Ecosistema</th>
        <th style="background: #d0dafd;
                color: #339;">Caracteristicas étnicas </th>
        <th style="background: #d0dafd;
                color: #339;">Nivel de tráfico </th>
        <th style="background: #d0dafd;
                color: #339;">Recirculación de aire</th>
        <th style="background: #d0dafd;
                color: #339;">Organización social </th>
        <th style="background: #d0dafd;
                color: #339;">Tendencia de tierra</th>
        <th style="background: #d0dafd;
                color: #339;">Abastecimiento de agua</th>
        <th style="background: #d0dafd;
                color: #339;">Evacuación de agua lluvia</th>
        <th style="background: #d0dafd;
                color: #339;">Consolidación de areas de influencia</th>
        <th style="background: #d0dafd;
                color: #339;">Evacuación de aguas servidas</th>
        <th style="background: #d0dafd;
                color: #339;">Uso vegetación </th>
        <th style="background: #d0dafd;
                color: #339;">Descripción de tradiciones </th>
        <th style="background: #d0dafd;
                color: #339;">Descripción de tipo de fuentes </th>
        <th style="background: #d0dafd;
                color: #339;">Ruido</th>
        <th style="background: #d0dafd;
                color: #339;">Precipitaciones</th>
            
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($areaInfluencias as $areaInfluencia)
        <tr style="font-size: 13px;
                font-weight: normal;
                padding: 8px;
                background: #b9c9fe;
                border-top: 4px solid #aabcfe;
                border-bottom: 1px solid #fff;
                color: #039;">
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->altitud !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->lat !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->long !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->tipoTerrenoDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->detalleCalidadAire !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->detalleRuido !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->observacionesEcosistema !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">
            @foreach($areaInfluencia->religions as $areainfluenciaHasReligion)

                    {!! $areainfluenciaHasReligion->nombre !!}

            @endforeach
            </td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">
            @foreach($areaInfluencia->lenguajes as $areainfluenciaHasLenguaje)

                    {!! $areainfluenciaHasLenguaje->nombre !!}

            @endforeach
            </td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">
            @foreach($areaInfluencia->tipovegetals as $areaInfluenciaHasTipoVegetal)

                    {!! $areaInfluenciaHasTipoVegetal->nombre_comun !!}

            @endforeach
            </td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->ManejoAmbiental->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->UsoSuelo->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->TipoSuelo->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->PermeabilidadSuelo->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->Clima->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->CondicionesDrenaje->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->Ecosistema->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->caracteristicasetnica->nombre !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->nivelTraficoDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->recirculacionAireDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->organizacionSocialDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->tendenciaTierraDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->abastecimientoAguaDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->evacuacionAguaLluviaDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->consolidacionAreasInfluenciaDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->evacuacionAguasServidasDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->usoVegetacionDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->tradicionesDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->tipoFuentesDescripcion !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->ruido !!}</td>
            <td style=" padding: 8px;
                background: #e8edff;
                border-bottom: 1px solid #fff;
                color: #669;
                border-top: 1px solid transparent;">{!! $areaInfluencia->precipitaciones !!}</td>
          
        </tr>
    @endforeach
    </tbody>
</table>
 <div class="card-footer text-muted footer" style="position: absolute;
                bottom: 0;
                width: 100%;
                height: 40px;" >
        <footer class="main-footer" style="max-height: 100px;text-align: center; ">
            <strong>Copyright © 2018 <a href="#">UTE</a>.</strong> All rights reserved.
        </footer>
    </div>
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
  <script>
function printDiv(nombreDiv) {
        var contenido= document.getElementById(nombreDiv).innerHTML;
        var contenidoOriginal= document.body.innerHTML;
        location.reload();
        document.body.innerHTML = contenido;

        window.print();

        document.body.innerHTML = contenidoOriginal;
    }

    </script>
	 <script>
   function cambiaVisibilidad() {
       var div1 = document.getElementById('areaInfluencias-table');
       var div2 = document.getElementById('areaImprimir');
       if(div2.style.display == 'block'){
           div2.style.display = 'none';
           div1.style.display = 'block';
       }else{
          div2.style.display = 'block';
          div1.style.display = 'none';
         }
   }

    </script>