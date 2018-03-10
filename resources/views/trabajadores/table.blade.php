<table class="table table-responsive" id="trabajadores-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Genero</th>
        <th>Fechadenacimiento</th>
        <th>Pais Id</th>
        <th>Ciudad Id</th>
        <th>Instruccionformal</th>
        <th>Horastrabajo</th>
        <th>Salario</th>
        <th>Plandegestionderiesgos Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{!! $trabajadores->nombre !!}</td>
            <td>{!! $trabajadores->apellido !!}</td>
            <td>{!! $trabajadores->genero !!}</td>
            <td>{!! $trabajadores->fechaDeNacimiento !!}</td>
            <td>{!! $trabajadores->Pais_id !!}</td>
            <td>{!! $trabajadores->Ciudad_id !!}</td>
            <td>{!! $trabajadores->instruccionFormal !!}</td>
            <td>{!! $trabajadores->horasTrabajo !!}</td>
            <td>{!! $trabajadores->salario !!}</td>
            <td>{!! $trabajadores->PlanDeGestionDeRiesgos_id !!}</td>
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