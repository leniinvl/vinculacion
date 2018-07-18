<table class="table table-responsive" id="ecosistemas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ecosistemas as $ecosistema)
        <tr>
            <td>{!! $ecosistema->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['ecosistemas.destroy', $ecosistema->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                     @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('ecosistemas.show', [$ecosistema->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ecosistemas.edit', [$ecosistema->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('ecosistemas.show', [$ecosistema->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ecosistemas.edit', [$ecosistema->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('ecosistemas.show', [$ecosistema->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
