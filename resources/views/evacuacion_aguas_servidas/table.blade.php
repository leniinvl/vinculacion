<table class="table table-responsive" id="evacuacionAguasServidas-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($evacuacionAguasServidas as $evacuacionAguasServidas)
        <tr>
            <td>{!! $evacuacionAguasServidas->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['evacuacionAguasServidas.destroy', $evacuacionAguasServidas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('evacuacionAguasServidas.show', [$evacuacionAguasServidas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('evacuacionAguasServidas.edit', [$evacuacionAguasServidas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>