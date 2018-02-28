<table class="table table-responsive" id="areainfluenciaHasPeligros-table">
    <thead>
        <tr>
            <th>Peligros Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areainfluenciaHasPeligros as $areainfluenciaHasPeligros)
        <tr>
            <td>{!! $areainfluenciaHasPeligros->Peligros_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areainfluenciaHasPeligros.destroy', $areainfluenciaHasPeligros->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areainfluenciaHasPeligros.show', [$areainfluenciaHasPeligros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areainfluenciaHasPeligros.edit', [$areainfluenciaHasPeligros->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
