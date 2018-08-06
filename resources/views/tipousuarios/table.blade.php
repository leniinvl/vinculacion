<table class="table table-responsive" id="tipousuarios-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acción</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipousuarios as $tipousuario)
        <tr>
            <td>{!! $tipousuario->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipousuarios.destroy', $tipousuario->id], 'method' => 'delete']) !!}
                
                <div class='btn-group'>
                     @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('tipousuarios.show', [$tipousuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipousuarios.edit', [$tipousuario->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @if($tipousuario->id!=1)
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Está Seguro/a?')"]) !!}
                    @endif
                    @else      
                @endif
                </div>
                
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>