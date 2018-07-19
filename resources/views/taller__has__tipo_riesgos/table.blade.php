<table class="table table-responsive" id="tallerHasTipoRiesgos-table">
    <thead>
        <tr>
            <th>Tiporiesgos Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tallerHasTipoRiesgos as $tallerHasTipoRiesgos)
        <tr>
            <td>{!! $tallerHasTipoRiesgos->TipoRiesgos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tallerHasTipoRiesgos.destroy', $tallerHasTipoRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('tallerHasTipoRiesgos.show', [$tallerHasTipoRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallerHasTipoRiesgos.edit', [$tallerHasTipoRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('tallerHasTipoRiesgos.show', [$tallerHasTipoRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallerHasTipoRiesgos.edit', [$tallerHasTipoRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('tallerHasTipoRiesgos.show', [$tallerHasTipoRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
