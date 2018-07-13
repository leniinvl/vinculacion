<table class="table table-responsive" id="unidadproduccions-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Lat</th>
        <th>Lng</th>
        <th>Observaciones</th>
        <th>Asociacion Id</th>
        <th>Producto Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($unidadproduccions as $unidadproduccion)
        <tr>
            <td>{!! $unidadproduccion->nombre !!}</td>
            <td>{!! $unidadproduccion->lat !!}</td>
            <td>{!! $unidadproduccion->lng !!}</td>
            <td>{!! $unidadproduccion->observaciones !!}</td>
            <td>{!! $unidadproduccion->asociacion->nombre !!}</td>
            <td>{!! $unidadproduccion->producto->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['unidadproduccions.destroy', $unidadproduccion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('unidadproduccions.show', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('unidadproduccions.edit', [$unidadproduccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="{{ route('vistaproduccionHTMLPDF',['descargar'=>'pdf']) }}" class="btn btn-default btn-xs">Descargar PDF</a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
