<table class="table table-responsive" id="desechots-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Peso</th>
        <th>Taller</th>
        <th>Tipo de desecho</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($desechots as $desechot)
        <tr>
            <td>{!! $desechot->fecha !!}</td>
            <td>{!! $desechot->peso !!}</td>
            <td>{!! $desechot->taller->nombre !!}</td>
            <td>{!! $desechot->tipodesechot->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['desechots.destroy', $desechot->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('desechots.show', [$desechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('desechots.edit', [$desechot->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Esta seguro de eliminar?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>