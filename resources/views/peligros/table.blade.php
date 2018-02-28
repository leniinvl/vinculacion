<table class="table table-responsive" id="peligros-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($peligros as $peligros)
        <tr>
            <td>{!! $peligros->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['peligros.destroy', $peligros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('peligros.show', [$peligros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('peligros.edit', [$peligros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
