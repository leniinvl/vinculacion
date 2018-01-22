<table class="table table-responsive" id="biodigestors-table">
    <thead>
        <tr>
            <th>Ubicación</th>
        <th>Tamaño de propiedad</th>
        <th>Cantidad de desechos</th>
        <th>Unidad de producción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($biodigestors as $biodigestor)
        <tr>
            <td>{!! $biodigestor->ubicacion !!}</td>
            <td>{!! $biodigestor->tamañoPropiedad !!}</td>
            <td>{!! $biodigestor->cantidadDesechos !!}</td>
            <td>{!! $biodigestor->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['biodigestors.destroy', $biodigestor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('biodigestors.show', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('biodigestors.edit', [$biodigestor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>