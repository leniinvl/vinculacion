<table class="table table-responsive" id="agriculturas-table">
    <thead>
        <tr>
            <th>Usotierra</th>
        <th>Unidadproduccion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($agriculturas as $agricultura)
        <tr>
            <td>{!! $agricultura->UsoTierra->nombre !!}</td>
            <td>{!! $agricultura->unidadproduccion->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['agriculturas.destroy', $agricultura->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('agriculturas.show', [$agricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('agriculturas.edit', [$agricultura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
