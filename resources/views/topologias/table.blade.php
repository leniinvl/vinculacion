<table class="table table-responsive" id="topologias-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($topologias as $topologia)
        <tr>
            <td>{!! $topologia->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['topologias.destroy', $topologia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('topologias.show', [$topologia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('topologias.edit', [$topologia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
