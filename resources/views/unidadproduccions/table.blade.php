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
    <tbody>
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
