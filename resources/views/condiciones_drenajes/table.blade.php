<table class="table table-responsive" id="condicionesDrenajes-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Valor</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($condicionesDrenajes as $condicionesDrenaje)
        <tr>
            <td>{!! $condicionesDrenaje->nombre !!}</td>
            <td>{!! $condicionesDrenaje->valor !!}</td>
            <td>
                {!! Form::open(['route' => ['condicionesDrenajes.destroy', $condicionesDrenaje->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('condicionesDrenajes.show', [$condicionesDrenaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('condicionesDrenajes.edit', [$condicionesDrenaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('condicionesDrenajes.show', [$condicionesDrenaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('condicionesDrenajes.edit', [$condicionesDrenaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
