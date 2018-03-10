<table class="table table-responsive" id="tipoabonos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoabonos as $tipoabono)
        <tr>
            <td>{!! $tipoabono->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoabonos.destroy', $tipoabono->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoabonos.show', [$tipoabono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoabonos.edit', [$tipoabono->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
