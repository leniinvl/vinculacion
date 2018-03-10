<table class="table table-responsive" id="tipoanimales-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipoproduccion Id</th>
        <th>Tipounidad Id</th>
        <th>Destino Id</th>
        <th>Precuaria Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoanimales as $tipoanimales)
        <tr>
            <td>{!! $tipoanimales->nombre !!}</td>
            <td>{!! $tipoanimales->TipoProduccion_id !!}</td>
            <td>{!! $tipoanimales->TipoUnidad_id !!}</td>
            <td>{!! $tipoanimales->Destino_id !!}</td>
            <td>{!! $tipoanimales->Precuaria_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoanimales.destroy', $tipoanimales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoanimales.show', [$tipoanimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoanimales.edit', [$tipoanimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>