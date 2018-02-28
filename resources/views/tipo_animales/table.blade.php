<table class="table table-responsive" id="tipoAnimales-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Loscria</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoAnimales as $tipoAnimales)
        <tr>
            <td>{!! $tipoAnimales->nombre !!}</td>
            <td>{!! $tipoAnimales->losCria !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoAnimales.destroy', $tipoAnimales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoAnimales.show', [$tipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoAnimales.edit', [$tipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
