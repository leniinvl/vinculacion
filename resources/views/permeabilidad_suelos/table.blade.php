<table class="table table-responsive" id="permeabilidadSuelos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Valor</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($permeabilidadSuelos as $permeabilidadSuelo)
        <tr>
            <td>{!! $permeabilidadSuelo->nombre !!}</td>
            <td>{!! $permeabilidadSuelo->valor !!}</td>
            <td>
                {!! Form::open(['route' => ['permeabilidadSuelos.destroy', $permeabilidadSuelo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('permeabilidadSuelos.show', [$permeabilidadSuelo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('permeabilidadSuelos.edit', [$permeabilidadSuelo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
