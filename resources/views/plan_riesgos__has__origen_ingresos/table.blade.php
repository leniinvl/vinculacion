<table class="table table-responsive" id="planRiesgosHasOrigenIngresos-table">
    <thead>
        <tr>
            <th>Origeningresos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgosHasOrigenIngresos as $planRiesgosHasOrigenIngresos)
        <tr>
            <td>{!! $planRiesgosHasOrigenIngresos->OrigenIngresos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgosHasOrigenIngresos.destroy', $planRiesgosHasOrigenIngresos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('planRiesgosHasOrigenIngresos.show', [$planRiesgosHasOrigenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasOrigenIngresos.edit', [$planRiesgosHasOrigenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('planRiesgosHasOrigenIngresos.show', [$planRiesgosHasOrigenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasOrigenIngresos.edit', [$planRiesgosHasOrigenIngresos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>