<table class="table table-responsive" id="tipoFuentes-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoFuentes as $tipoFuentes)
        <tr>
            <td>{!! $tipoFuentes->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoFuentes.destroy', $tipoFuentes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoFuentes.show', [$tipoFuentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoFuentes.edit', [$tipoFuentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
