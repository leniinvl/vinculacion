<table class="table table-responsive" id="amenazas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($amenazas as $amenazas)
        <tr>
            <td>{!! $amenazas->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['amenazas.destroy', $amenazas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('amenazas.show', [$amenazas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('amenazas.edit', [$amenazas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>