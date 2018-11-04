<link href="http://tablefilter.free.fr/TableFilter/filtergrid.css" rel="stylesheet" >
    <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div style="overflow-x:auto;">
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="asociacions-table" type="text" class="form-control" placeholder="Buscar">
</div>
{{--<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>--}}

<table class="table table-responsive" id="asociacions-table ">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Persona encargada</th>
        <th>Tipo de asociación</th>
            <th colspan="3">Acciones</th>
          
        </tr>
    </thead>
    <tbody class="contenidobusqueda">

    @foreach($asociacions as $asociacion)
        <tr>
            <td>{!! $asociacion->nombre !!}</td>
            <td>{!! $asociacion->personaEncargada !!}</td>
            <td>{!! $asociacion->tipoasociacion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['asociacions.destroy', $asociacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asociacions.edit', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                {{--  {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asociacions.edit', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
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
var table2_Props = {
    col_0: "select",
    col_1: "select",
    col_2: "select",
    col_3: "none",
  
    display_all_text: " [ Seleccionar ] ",
    sort_select: true
};
var tf2 = setFilterGrid("asociacions-table ", table2_Props);
</script>
<script>
  $(document).ready(function () {
     $('#asociacions-table').keyup(function () {
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