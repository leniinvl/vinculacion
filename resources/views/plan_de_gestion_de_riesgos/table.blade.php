<link href="http://tablefilter.free.fr/TableFilter/filtergrid.css" rel="stylesheet" >
    <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div style="overflow-x:auto;">
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="planDeGestionDeRiesgos-table" type="text" class="form-control" placeholder="Buscar">
</div>
<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>
<div id="areaImprimir">
<table class="table table-responsive" id="planDeGestionDeRiesgos-table ">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipo de Abono</th>
        <th>Tipo de Control de Plaga</th>
        <th>Tipo de Cultivo</th>
        <th>Tipos de Animales</th>
        <th>Orígenes de Ingresos</th>
        <th>Agricultura</th>
        <th>Amenazas</th>
        {{--<th>Vulnerabilidades</th>--}}
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody  class="contenidobusqueda">
    @foreach($planDeGestionDeRiesgos as $planDeGestionDeRiesgos)
        <tr>
            <td>{!! $planDeGestionDeRiesgos->nombre !!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipoabono->nombre!!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipocontrolplaga->nombre !!}</td>
            <td>{!! $planDeGestionDeRiesgos->tipocultivos->nombre !!}</td>
            <td>
              @foreach($planDeGestionDeRiesgos->tipoanimales as $planRiesgosHasTipoAnimales)
                    <p>{!! $planRiesgosHasTipoAnimales->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->origeningresos as $planRiesgosHasOrigenIngresos)
                    <p>{!! $planRiesgosHasOrigenIngresos->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->agriculturas as $planRiesgosHasAgriculturas)
                    <p>{!! $planRiesgosHasAgriculturas->nombre !!}</p>
              @endforeach
            </td>
            <td>
              @foreach($planDeGestionDeRiesgos->amenazas as $planRiesgosHasAmenazas)
                    <p>{!! $planRiesgosHasAmenazas->nombre !!}</p>
              @endforeach
            </td>
            {{--<td>
              @foreach($planDeGestionDeRiesgos->vulnerabilidades as $planRiesgosHasVulnerabilidades)
                    <p>{!! $planRiesgosHasVulnerabilidades->nombre !!}</p>
              @endforeach
            </td>--}}
            <td>
                {!! Form::open(['route' => ['planDeGestionDeRiesgos.destroy', $planDeGestionDeRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('planDeGestionDeRiesgos.show', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planDeGestionDeRiesgos.edit', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('planDeGestionDeRiesgos.show', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planDeGestionDeRiesgos.edit', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('planDeGestionDeRiesgos.show', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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
</div>
<script>
  $(document).ready(function () {
     $('#planDeGestionDeRiesgos-table').keyup(function () {
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
var table2_Props = {
    col_0: "select",
    col_1: "select",
    col_2: "select",
    col_3: "select",
    col_4: "select",
    col_5: "select",
    col_6: "select",
    col_7: "select",
    col_8: "select",
    col_9: "none",
    
    display_all_text: " [ Seleccionar ] ",
    sort_select: true
};
var tf2 = setFilterGrid("planDeGestionDeRiesgos-table ", table2_Props);
</script>
