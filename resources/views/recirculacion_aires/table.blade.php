<table class="table table-responsive" id="recirculacionAires-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($recirculacionAires as $recirculacionAire)
        <tr>
            <td>{!! $recirculacionAire->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['recirculacionAires.destroy', $recirculacionAire->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('recirculacionAires.show', [$recirculacionAire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('recirculacionAires.edit', [$recirculacionAire->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>