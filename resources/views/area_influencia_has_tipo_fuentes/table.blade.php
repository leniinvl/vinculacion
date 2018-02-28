<table class="table table-responsive" id="areaInfluenciaHasTipoFuentes-table">
    <thead>
        <tr>
            <th>Tipofuentes Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areaInfluenciaHasTipoFuentes as $areaInfluenciaHasTipoFuentes)
        <tr>
            <td>{!! $areaInfluenciaHasTipoFuentes->TipoFuentes_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluenciaHasTipoFuentes.destroy', $areaInfluenciaHasTipoFuentes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluenciaHasTipoFuentes.show', [$areaInfluenciaHasTipoFuentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluenciaHasTipoFuentes.edit', [$areaInfluenciaHasTipoFuentes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
