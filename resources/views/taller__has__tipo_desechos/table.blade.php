<table class="table table-responsive" id="tallerHasTipoDesechos-table">
    <thead>
        <tr>
            <th>Tipodesecho Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tallerHasTipoDesechos as $tallerHasTipoDesecho)
        <tr>
            <td>{!! $tallerHasTipoDesecho->TipoDesecho_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tallerHasTipoDesechos.destroy', $tallerHasTipoDesecho->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tallerHasTipoDesechos.show', [$tallerHasTipoDesecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tallerHasTipoDesechos.edit', [$tallerHasTipoDesecho->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>