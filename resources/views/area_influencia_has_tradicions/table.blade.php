<table class="table table-responsive" id="areaInfluenciaHasTradicions-table">
    <thead>
        <tr>
            <th>Tradicion Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areaInfluenciaHasTradicions as $areaInfluenciaHasTradicion)
        <tr>
            <td>{!! $areaInfluenciaHasTradicion->Tradicion_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluenciaHasTradicions.destroy', $areaInfluenciaHasTradicion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluenciaHasTradicions.show', [$areaInfluenciaHasTradicion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluenciaHasTradicions.edit', [$areaInfluenciaHasTradicion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
