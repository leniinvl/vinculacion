<table class="table table-responsive" id="tendenciaTierras-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tendenciaTierras as $tendenciaTierra)
        <tr>
            <td>{!! $tendenciaTierra->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tendenciaTierras.destroy', $tendenciaTierra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tendenciaTierras.show', [$tendenciaTierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tendenciaTierras.edit', [$tendenciaTierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
