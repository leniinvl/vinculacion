<table class="table table-responsive" id="biodigestors-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tamaño de la Propiedad (m^2)</th>
        <th>Imagen</th>
        <th>Video</th>
        <th>Ancho Biodigestor (m)</th>
        <th>Largo Biodigestor (m)</th>
        <th>Profundidad Biodigestor (m)</th>
        <th>Volumen Biodigestor (m^3)</th>
        <th>Ancho Caja AD (m)</th>
        <th>Largo Caja AD (m)</th>
        <th>Profundidad Caja AD (m)</th>
        <th>Temperatura (°C)</th>
        <th>Unidad de Producción</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($biodigestors as $biodigestor)
        <tr>
            <td>{!! $biodigestor->ubicacion !!}</td>
            <td>{!! $biodigestor->tamañoPropiedad !!}</td>
            <td>{!! $biodigestor->imagen !!}</td>
            <td>{!! $biodigestor->video !!}</td>
            <td>{!! $biodigestor->anchoBio !!}</td>
            <td>{!! $biodigestor->largoBio !!}</td>
            <td>{!! $biodigestor->profundBio !!}</td>
            <td>{!! $biodigestor->profundBio * $biodigestor->largoBio * $biodigestor->anchoBio !!}</td>
            <td>{!! $biodigestor->anchoCaja !!}</td>
            <td>{!! $biodigestor->largoCaja !!}</td>
            <td>{!! $biodigestor->profundCaja !!}</td>
            <td>{!! $biodigestor->temperatura !!}</td>
            <td>{!! $biodigestor->unidadproduccion->nombre !!}</td>
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
