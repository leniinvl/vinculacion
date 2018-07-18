<table class="table table-responsive" id="areainfluenciaHasUsotierras-table">
    <thead>
        <tr>
            <th>Uso tierra</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areainfluenciaHasUsotierras as $areainfluenciaHasUsotierra)
        <tr>
            <td>{!! $areainfluenciaHasUsotierra->UsoTierra_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areainfluenciaHasUsotierras.destroy', $areainfluenciaHasUsotierra->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('areainfluenciaHasUsotierras.show', [$areainfluenciaHasUsotierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areainfluenciaHasUsotierras.edit', [$areainfluenciaHasUsotierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('areainfluenciaHasUsotierras.show', [$areainfluenciaHasUsotierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areainfluenciaHasUsotierras.edit', [$areainfluenciaHasUsotierra->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>