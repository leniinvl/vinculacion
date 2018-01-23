<table class="table table-responsive" id="tipoSuelos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoSuelos as $tipoSuelo)
        <tr>
            <td>{!! $tipoSuelo->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoSuelos.destroy', $tipoSuelo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoSuelos.show', [$tipoSuelo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoSuelos.edit', [$tipoSuelo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>