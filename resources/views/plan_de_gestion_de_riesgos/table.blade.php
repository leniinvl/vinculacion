<table class="table table-responsive" id="planDeGestionDeRiesgos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipoabono Id</th>
        <th>Tipocontrolplaga Id</th>
        <th>Tipocultivos Id</th>
        <th>Origeningresos Id</th>
        <th>Agricultura Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planDeGestionDeRiesgos as $planDeGestionDeRiesgos)
        <tr>
            <td>{!! $planDeGestionDeRiesgos->nombre !!}</td>
            <td>{!! $planDeGestionDeRiesgos->TipoAbono_id !!}</td>
            <td>{!! $planDeGestionDeRiesgos->TipoControlPlaga_id !!}</td>
            <td>{!! $planDeGestionDeRiesgos->TipoCultivos_id !!}</td>
            <td>{!! $planDeGestionDeRiesgos->OrigenIngresos_id !!}</td>
            <td>{!! $planDeGestionDeRiesgos->Agricultura_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planDeGestionDeRiesgos.destroy', $planDeGestionDeRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planDeGestionDeRiesgos.show', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planDeGestionDeRiesgos.edit', [$planDeGestionDeRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>