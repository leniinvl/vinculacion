<table class="table table-responsive" id="tipoUnidads-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoUnidads as $tipoUnidad)
        <tr>
            <td>{!! $tipoUnidad->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoUnidads.destroy', $tipoUnidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoUnidads.show', [$tipoUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoUnidads.edit', [$tipoUnidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>