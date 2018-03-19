<table class="table table-responsive" id="agriculturas-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Unidad de Producción</th>
        <th>Uso de suelo</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agriculturas as $agricultura)
        <tr>
            <td>{!! $agricultura->nombre !!}</td>
            <td>{!! $agricultura->UnidadProduccion->nombre !!}</td>
            <td>{!! $agricultura->UsoSuelo->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['agriculturas.destroy', $agricultura->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agriculturas.show', [$agricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agriculturas.edit', [$agricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
