<table class="table table-responsive" id="religions-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($religions as $religion)
        <tr>
            <td>{!! $religion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['religions.destroy', $religion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('religions.show', [$religion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('religions.edit', [$religion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
