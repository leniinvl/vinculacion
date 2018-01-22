<table class="table table-responsive" id="planRiesgosHasTipoAnimales-table">
    <thead>
        <tr>
            <th>Tipoanimales Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($planRiesgosHasTipoAnimales as $planRiesgosHasTipoAnimales)
        <tr>
            <td>{!! $planRiesgosHasTipoAnimales->TipoAnimales_id !!}</td>
            <td>
                {!! Form::open(['route' => ['planRiesgosHasTipoAnimales.destroy', $planRiesgosHasTipoAnimales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('planRiesgosHasTipoAnimales.show', [$planRiesgosHasTipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('planRiesgosHasTipoAnimales.edit', [$planRiesgosHasTipoAnimales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>