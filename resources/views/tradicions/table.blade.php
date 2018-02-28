<table class="table table-responsive" id="tradicions-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tradicions as $tradicion)
        <tr>
            <td>{!! $tradicion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tradicions.destroy', $tradicion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tradicions.show', [$tradicion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tradicions.edit', [$tradicion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
