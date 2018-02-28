<table class="table table-responsive" id="areaInfluenciaHasTipoVegetals-table">
    <thead>
        <tr>
            <th>Tipovegetal Id</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areaInfluenciaHasTipoVegetals as $areaInfluenciaHasTipoVegetal)
        <tr>
            <td>{!! $areaInfluenciaHasTipoVegetal->TipoVegetal_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluenciaHasTipoVegetals.destroy', $areaInfluenciaHasTipoVegetal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluenciaHasTipoVegetals.show', [$areaInfluenciaHasTipoVegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluenciaHasTipoVegetals.edit', [$areaInfluenciaHasTipoVegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
