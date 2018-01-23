<table class="table table-responsive" id="tipoAsociacions-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoAsociacions as $tipoAsociacion)
        <tr>
            <td>{!! $tipoAsociacion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoAsociacions.destroy', $tipoAsociacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoAsociacions.show', [$tipoAsociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoAsociacions.edit', [$tipoAsociacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>