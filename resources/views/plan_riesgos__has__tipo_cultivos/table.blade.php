<table class="table table-responsive" id="planRiesgosHasTipoCultivos-table">
    <thead>
        <tr>
            <th>Tipocultivos Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgosHasTipoCultivos as $planRiesgosHasTipoCultivos)
        <tr>
            <td>{!! $planRiesgosHasTipoCultivos->TipoCultivos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgosHasTipoCultivos.destroy', $planRiesgosHasTipoCultivos->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('planRiesgosHasTipoCultivos.show', [$planRiesgosHasTipoCultivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoCultivos.edit', [$planRiesgosHasTipoCultivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
					@if(Auth::user()->tipousuario_id===2)
				<a href="{!! route('planRiesgosHasTipoCultivos.show', [$planRiesgosHasTipoCultivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoCultivos.edit', [$planRiesgosHasTipoCultivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
					@else
				<a href="{!! route('planRiesgosHasTipoCultivos.show', [$planRiesgosHasTipoCultivos->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					@endif	
                    
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
