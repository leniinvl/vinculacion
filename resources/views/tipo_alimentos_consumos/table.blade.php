<table class="table table-responsive" id="tipoAlimentosConsumos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoAlimentosConsumos as $tipoAlimentosConsumo)
        <tr>
            <td>{!! $tipoAlimentosConsumo->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoAlimentosConsumos.destroy', $tipoAlimentosConsumo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoAlimentosConsumos.show', [$tipoAlimentosConsumo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoAlimentosConsumos.edit', [$tipoAlimentosConsumo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>