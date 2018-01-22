<table class="table table-responsive" id="abastecimientoaguas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($abastecimientoaguas as $abastecimientoagua)
        <tr>
            <td>{!! $abastecimientoagua->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['abastecimientoaguas.destroy', $abastecimientoagua->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('abastecimientoaguas.show', [$abastecimientoagua->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('abastecimientoaguas.edit', [$abastecimientoagua->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>