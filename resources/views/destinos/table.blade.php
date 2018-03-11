<table class="table table-responsive" id="destinos-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($destinos as $destino)
        <tr>
            <td>{!! $destino->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['destinos.destroy', $destino->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('destinos.show', [$destino->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('destinos.edit', [$destino->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
