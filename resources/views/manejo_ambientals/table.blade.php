<table class="table table-responsive" id="manejoAmbientals-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripción</th>
        <th>Tipo de Proyecto</th>
        <th>Categoria Proyecto</th>
        <th>Unidad Produccion</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($manejoAmbientals as $manejoAmbiental)
        <tr>
            <td>{!! $manejoAmbiental->nombre !!}</td>
            <td>{!! $manejoAmbiental->descripcion !!}</td>
            <td>{!! $manejoAmbiental->tipoproyecto->nombre !!}</td>
            <td>{!! $manejoAmbiental->categoriaproyecto->nombre !!}</td>
            <td>{!! $manejoAmbiental->unidadproduccion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['manejoAmbientals.destroy', $manejoAmbiental->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('manejoAmbientals.show', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('manejoAmbientals.edit', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('manejoAmbientals.show', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('manejoAmbientals.edit', [$manejoAmbiental->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
