<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<div class="input-group"> <span class="input-group-addon fa fa-search" aria-hidden="true"></span>
    <input id="unidadproduccions-table" type="text" class="form-control" placeholder="Buscar">
</div>
<table class="table table-responsive" id="unidadproduccions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Lat</th>
        <th>Lng</th>
        <th>Observaciones</th>
        <th>Asociacion Id</th>
        <th>Producto Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody class="contenidobusqueda">
    @foreach($unidadproduccions as $unidadproduccion)
        <tr>
            <td>{!! $unidadproduccion->nombre !!}</td>
            <td>{!! $unidadproduccion->lat !!}</td>
            <td>{!! $unidadproduccion->lng !!}</td>
            <td>{!! $unidadproduccion->observaciones !!}</td>
            <td>{!! $unidadproduccion->asociacion->nombre !!}</td>
            <td>{!! $unidadproduccion->producto->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['unidadproduccions.destroy', $unidadproduccion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('unidadproduccions.show', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unidadproduccions.edit', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('unidadproduccions.show', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unidadproduccions.edit', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('unidadproduccions.show', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<script>
  $(document).ready(function () {
     $('#unidadproduccions-table').keyup(function () {
        var rex = new RegExp($(this).val(), 'i');
          $('.contenidobusqueda tr').hide();
          $('.contenidobusqueda tr').filter(function () {
              return rex.test($(this).text());
          }).show();

          })

  });
  </script>