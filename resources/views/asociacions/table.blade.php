<table class="table table-responsive" id="asociacions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Personaencargada</th>
        <th>Tipoasociacion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($asociacions as $asociacion)
        <tr>
            <td>{!! $asociacion->nombre !!}</td>
            <td>{!! $asociacion->personaEncargada !!}</td>
            <td>{!! $asociacion->TipoAsociacion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['asociacions.destroy', $asociacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asociacions.show', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asociacions.edit', [$asociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>