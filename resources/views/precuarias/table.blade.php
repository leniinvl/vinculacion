<table class="table table-responsive" id="precuarias-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($precuarias as $precuaria)
        <tr>
            <td>{!! $precuaria->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['precuarias.destroy', $precuaria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('precuarias.show', [$precuaria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('precuarias.edit', [$precuaria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
