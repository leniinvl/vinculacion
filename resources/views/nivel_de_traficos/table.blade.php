<table class="table table-responsive" id="nivelDeTraficos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($nivelDeTraficos as $nivelDeTrafico)
        <tr>
            <td>{!! $nivelDeTrafico->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['nivelDeTraficos.destroy', $nivelDeTrafico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nivelDeTraficos.show', [$nivelDeTrafico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nivelDeTraficos.edit', [$nivelDeTrafico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>