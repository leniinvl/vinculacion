<table class="table table-responsive" id="manejoAmbientals-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
        <th>Tipoproyecto Id</th>
        <th>Categoriaproyecto Id</th>
        <th>Unidadproduccion Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($manejoAmbientals as $manejoAmbiental)
        <tr>
            <td>{!! $manejoAmbiental->nombre !!}</td>
            <td>{!! $manejoAmbiental->descripcion !!}</td>
            <td>{!! $manejoAmbiental->TipoProyecto_id !!}</td>
            <td>{!! $manejoAmbiental->CategoriaProyecto_id !!}</td>
            <td>{!! $manejoAmbiental->UnidadProduccion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['manejoAmbientals.destroy', $manejoAmbiental->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('manejoAmbientals.show', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('manejoAmbientals.edit', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>