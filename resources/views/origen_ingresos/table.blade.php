<table class="table table-responsive" id="origenIngresos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Unidad de Producción</th>
            <th>Propietario</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($origenIngresos as $origenIngresos)
        <tr>
            <td>{!! $origenIngresos->nombre !!}</td>
            <td>{!! $origenIngresos->unidadproduccion->nombre !!}</td>
            <td>{!! $origenIngresos->Propietario->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['origenIngresos.destroy', $origenIngresos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('origenIngresos.show', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('origenIngresos.edit', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('origenIngresos.show', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('origenIngresos.edit', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('origenIngresos.show', [$origenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
