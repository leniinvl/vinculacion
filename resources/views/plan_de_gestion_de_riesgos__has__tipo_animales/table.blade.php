<table class="table table-responsive" id="planDeGestionDeRiesgosHasTipoAnimales-table">
    <thead>
        <tr>
            <th>Tipoanimales Id</th>
        <th>Cantidad Animales</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planDeGestionDeRiesgosHasTipoAnimales as $planDeGestionDeRiesgosHasTipoAnimales)
        <tr>
            <td>{!! $planDeGestionDeRiesgosHasTipoAnimales->TipoAnimales_id !!}</td>
            <td>{!! $planDeGestionDeRiesgosHasTipoAnimales->cantidad_animales !!}</td>
            <td>
                {!! Form::open(['route' => ['planDeGestionDeRiesgosHasTipoAnimales.destroy', $planDeGestionDeRiesgosHasTipoAnimales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planDeGestionDeRiesgosHasTipoAnimales.show', [$planDeGestionDeRiesgosHasTipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planDeGestionDeRiesgosHasTipoAnimales.edit', [$planDeGestionDeRiesgosHasTipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>