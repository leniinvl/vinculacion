<table class="table table-responsive" id="areaInfluenciaHasTopologias-table">
    <thead>
        <tr>
            <th>Topologia Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($areaInfluenciaHasTopologias as $areaInfluenciaHasTopologia)
        <tr>
            <td>{!! $areaInfluenciaHasTopologia->Topologia_id !!}</td>
            <td>
                {!! Form::open(['route' => ['areaInfluenciaHasTopologias.destroy', $areaInfluenciaHasTopologia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('areaInfluenciaHasTopologias.show', [$areaInfluenciaHasTopologia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('areaInfluenciaHasTopologias.edit', [$areaInfluenciaHasTopologia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>