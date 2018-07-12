<table class="table table-responsive" id="asociacions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Persona encargada</th>
        <th>Tipo de asociación</th>
            <th colspan="3">Acciones</th>
          
        </tr>
    </thead>
    <tbody>

    @foreach($asociacions as $asociacion)
        <tr>
            <td>{!! $asociacion->nombre !!}</td>
            <td>{!! $asociacion->personaEncargada !!}</td>
            <td>{!! $asociacion->tipoasociacion->id !!}</td>
            <td>
                {!! Form::open(['route' => ['asociacions.destroy', $asociacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                   @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asociacions.edit', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                     <a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asociacions.edit', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
