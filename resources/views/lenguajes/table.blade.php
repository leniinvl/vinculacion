<table class="table table-responsive" id="lenguajes-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($lenguajes as $lenguaje)
        <tr>
            <td>{!! $lenguaje->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['lenguajes.destroy', $lenguaje->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('lenguajes.show', [$lenguaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('lenguajes.edit', [$lenguaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
