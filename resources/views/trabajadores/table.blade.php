<link href="http://tablefilter.free.fr/TableFilter/filtergrid.css" rel="stylesheet" >
    <script src="http://tablefilter.free.fr/TableFilter/tablefilter_all_min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div style="overflow-x:auto;">
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="trabajadores-table" type="text" class="form-control" placeholder="Buscar">
</div>
{{--<section>
    <input type="button" class="btn btn-primary pull-right" style="margin-top: 5px;margin-bottom: 5px" onclick="printDiv('areaImprimir')" value="Generar Reporte" />
    </section>--}}
<div id="areaImprimir">
<table class="table table-responsive" id="trabajadores-table ">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>País</th>
        <th>Nacionalidad</th>
        <th>Instrucción Formal</th>
        <th>Horas de Trabajo</th>
        <th>Salario</th>
        <th>Plan de Gestión de Riesgos</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{!! $trabajadores->nombre !!}</td>
            <td>{!! $trabajadores->apellido !!}</td>
            <td>{!! $trabajadores->fechaDeNacimiento !!}</td>
            <td>{!! $trabajadores->genero->nombre !!}</td>
            <td>{!! $trabajadores->pais->nombre!!}</td>
            <td>{!! $trabajadores->nacionalidad!!}</td>
            <td>{!! $trabajadores->instruccionFormal !!}</td>
            <td>{!! $trabajadores->horasTrabajo !!}</td>
            <td>{!! $trabajadores->salario !!}</td>
            <td>{!! $trabajadores->plandegestionderiesgos->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajadores.destroy', $trabajadores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadores.edit', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadores.edit', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

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
     $('#trabajadores-table').keyup(function () {
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
    col_9: "select",

    col_10: "none",
  
    display_all_text: " [ Seleccionar ] ",
    sort_select: true
};
var tf2 = setFilterGrid("trabajadores-table ", table2_Props);
</script>