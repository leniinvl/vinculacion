<table class="table table-responsive" id="tipoControlPlagas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tipoControlPlagas as $tipoControlPlaga)
        <tr>
            <td>{!! $tipoControlPlaga->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['tipoControlPlagas.destroy', $tipoControlPlaga->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tipoControlPlagas.show', [$tipoControlPlaga->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tipoControlPlagas.edit', [$tipoControlPlaga->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>