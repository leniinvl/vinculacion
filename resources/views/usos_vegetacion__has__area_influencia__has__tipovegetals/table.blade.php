<table class="table table-responsive" id="usosVegetacionHasAreaInfluenciaHasTipovegetals-table">
    <thead>
        <tr>
            <th>Areainfluencia Has Tipovegetal Areainfluencia Id</th>
        <th>Areainfluencia Has Tipovegetal Tipovegetal Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($usosVegetacionHasAreaInfluenciaHasTipovegetals as $usosVegetacionHasAreaInfluenciaHasTipovegetal)
        <tr>
            <td>{!! $usosVegetacionHasAreaInfluenciaHasTipovegetal->AreaInfluencia_has_TipoVegetal_AreaInfluencia_id !!}</td>
            <td>{!! $usosVegetacionHasAreaInfluenciaHasTipovegetal->AreaInfluencia_has_TipoVegetal_TipoVegetal_id !!}</td>
            <td>
                {!! Form::open(['route' => ['usosVegetacionHasAreaInfluenciaHasTipovegetals.destroy', $usosVegetacionHasAreaInfluenciaHasTipovegetal->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('usosVegetacionHasAreaInfluenciaHasTipovegetals.show', [$usosVegetacionHasAreaInfluenciaHasTipovegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('usosVegetacionHasAreaInfluenciaHasTipovegetals.edit', [$usosVegetacionHasAreaInfluenciaHasTipovegetal->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>