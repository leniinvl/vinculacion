<table class="table table-responsive" id="plandeGestiondeRiesgos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipoabono Id</th>
        <th>Tipocontrolplaga Id</th>
        <th>Tipocultivos Id</th>
        <th>Tipoanimales Id</th>
        <th>Cantidad Animales</th>
        <th>Origeningresos Id</th>
        <th>Agricultura Id</th>
        <th>Amenazas Id</th>
        <th>Vulnerabilidades Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($plandeGestiondeRiesgos as $plandeGestiondeRiesgos)
        <tr>
            <td>{!! $plandeGestiondeRiesgos->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoAbono_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoControlPlaga_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoCultivos_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoAnimales_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->cantidad_animales !!}</td>
            <td>{!! $plandeGestiondeRiesgos->OrigenIngresos_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Agricultura_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Amenazas_id !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Vulnerabilidades_id !!}</td>
            <td>
                {!! Form::open(['route' => ['plandeGestiondeRiesgos.destroy', $plandeGestiondeRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('plandeGestiondeRiesgos.show', [$plandeGestiondeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('plandeGestiondeRiesgos.edit', [$plandeGestiondeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>