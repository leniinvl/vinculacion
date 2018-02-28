<table class="table table-responsive" id="tipoAgriculturas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoAgriculturas as $tipoAgricultura)
        <tr>
            <td>{!! $tipoAgricultura->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoAgriculturas.destroy', $tipoAgricultura->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoAgriculturas.show', [$tipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoAgriculturas.edit', [$tipoAgricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
