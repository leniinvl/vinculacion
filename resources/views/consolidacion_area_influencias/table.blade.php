<table class="table table-responsive" id="consolidacionAreaInfluencias-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($consolidacionAreaInfluencias as $consolidacionAreaInfluencia)
        <tr>
            <td>{!! $consolidacionAreaInfluencia->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['consolidacionAreaInfluencias.destroy', $consolidacionAreaInfluencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('consolidacionAreaInfluencias.show', [$consolidacionAreaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('consolidacionAreaInfluencias.edit', [$consolidacionAreaInfluencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>