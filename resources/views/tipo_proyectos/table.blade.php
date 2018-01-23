<table class="table table-responsive" id="tipoProyectos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoProyectos as $tipoProyecto)
        <tr>
            <td>{!! $tipoProyecto->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoProyectos.destroy', $tipoProyecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoProyectos.show', [$tipoProyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoProyectos.edit', [$tipoProyecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>