<table class="table table-responsive" id="ciudads-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Pais Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ciudads as $ciudad)
        <tr>
            <td>{!! $ciudad->nombre !!}</td>
            <td>{!! $ciudad->pais->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['ciudads.destroy', $ciudad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ciudads.show', [$ciudad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ciudads.edit', [$ciudad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
