<table class="table table-responsive" id="evacuacionAguaLluvias-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($evacuacionAguaLluvias as $evacuacionAguaLluvia)
        <tr>
            <td>{!! $evacuacionAguaLluvia->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['evacuacionAguaLluvias.destroy', $evacuacionAguaLluvia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('evacuacionAguaLluvias.show', [$evacuacionAguaLluvia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('evacuacionAguaLluvias.edit', [$evacuacionAguaLluvia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
