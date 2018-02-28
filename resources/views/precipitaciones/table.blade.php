<table class="table table-responsive" id="precipitaciones-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($precipitaciones as $precipitaciones)
        <tr>
            <td>{!! $precipitaciones->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['precipitaciones.destroy', $precipitaciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('precipitaciones.show', [$precipitaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('precipitaciones.edit', [$precipitaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
