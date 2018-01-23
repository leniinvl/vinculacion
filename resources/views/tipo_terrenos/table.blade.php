<table class="table table-responsive" id="tipoTerrenos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoTerrenos as $tipoTerreno)
        <tr>
            <td>{!! $tipoTerreno->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoTerrenos.destroy', $tipoTerreno->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoTerrenos.show', [$tipoTerreno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoTerrenos.edit', [$tipoTerreno->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>