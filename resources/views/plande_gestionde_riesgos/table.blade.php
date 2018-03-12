<table class="table table-responsive" id="plandeGestiondeRiesgos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipo abono</th>
        <th>Tipo control plaga</th>
        <th>Tipo cultivo</th>
        <th>Tipo animales</th>
        <th>Cantidad Animales</th>
        <th>Origen ingresos</th>
        <th>Agricultura</th>
        <th>Amenazas</th>
        <th>Vulnerabilidades</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($plandeGestiondeRiesgos as $plandeGestiondeRiesgos)
        <tr>
            <td>{!! $plandeGestiondeRiesgos->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoAbono->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoControlPlaga->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoCultivos->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->TipoAnimales->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->cantidad_animales !!}</td>
            <td>{!! $plandeGestiondeRiesgos->OrigenIngresos->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Agricultura->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Amenazas->nombre !!}</td>
            <td>{!! $plandeGestiondeRiesgos->Vulnerabilidades->nombre !!}</td>
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
