<table class="table table-responsive" id="tipoVegetals-table">
    <thead>
        <tr>
            <th>Nombre Comun</th>
        <th>Nombre Cientifico</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoVegetals as $tipoVegetal)
        <tr>
            <td>{!! $tipoVegetal->nombre_comun !!}</td>
            <td>{!! $tipoVegetal->nombre_cientifico !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoVegetals.destroy', $tipoVegetal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoVegetals.show', [$tipoVegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoVegetals.edit', [$tipoVegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>