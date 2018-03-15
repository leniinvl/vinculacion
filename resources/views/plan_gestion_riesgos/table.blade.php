<table class="table table-responsive" id="planGestionRiesgos-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Tipoabono Id</th>
        <th>Tipocontrolplaga Id</th>
        <th>Tipocultivos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planGestionRiesgos as $planGestionRiesgos)
        <tr>
            <td>{!! $planGestionRiesgos->nombre !!}</td>
            <td>{!! $planGestionRiesgos->TipoAbono_id !!}</td>
            <td>{!! $planGestionRiesgos->TipoControlPlaga_id !!}</td>
            <td>{!! $planGestionRiesgos->TipoCultivos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planGestionRiesgos.destroy', $planGestionRiesgos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planGestionRiesgos.show', [$planGestionRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planGestionRiesgos.edit', [$planGestionRiesgos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>