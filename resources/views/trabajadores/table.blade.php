<table class="table table-responsive" id="trabajadores-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Sexo</th>
        <th>Horastrabajo</th>
        <th>Salario</th>
        <th>Planriesgos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{!! $trabajadores->nombre !!}</td>
            <td>{!! $trabajadores->sexo !!}</td>
            <td>{!! $trabajadores->horasTrabajo !!}</td>
            <td>{!! $trabajadores->salario !!}</td>
            <td>{!! $trabajadores->PlanRiesgos_id !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajadores.destroy', $trabajadores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadores.edit', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>