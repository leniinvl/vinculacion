<table class="table table-responsive" id="paisajes-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripción</th>
        <th>Areainfluencia Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($paisajes as $paisaje)
        <tr>
            <td>{!! $paisaje->nombre !!}</td>
            <td>{!! $paisaje->descripcion !!}</td>
            <td>{!! $paisaje->areainfluencium->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['paisajes.destroy', $paisaje->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('paisajes.show', [$paisaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('paisajes.edit', [$paisaje->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
