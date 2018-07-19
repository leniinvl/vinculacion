<table class="table table-responsive" id="vulnerabilidades-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($vulnerabilidades as $vulnerabilidades)
        <tr>
            <td>{!! $vulnerabilidades->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['vulnerabilidades.destroy', $vulnerabilidades->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
				@if(Auth::user()->tipousuario_id===1)
				 <a href="{!! route('vulnerabilidades.show', [$vulnerabilidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vulnerabilidades.edit', [$vulnerabilidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
				@else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('vulnerabilidades.show', [$vulnerabilidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('vulnerabilidades.edit', [$vulnerabilidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>

					@else
				<a href="{!! route('vulnerabilidades.show', [$vulnerabilidades->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
				@endif	
                   
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
