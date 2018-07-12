<table class="table table-responsive" id="trabajadores-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Nacimiento</th>
        <th>Género</th>
        <th>País</th>
        <th>Nacionalidad</th>
        <th>Instrucción Formal</th>
        <th>Horas de Trabajo</th>
        <th>Salario</th>
        <th>Plan de Gestión de Riesgos</th>
            <th colspan="3">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabajadores as $trabajadores)
        <tr>
            <td>{!! $trabajadores->nombre !!}</td>
            <td>{!! $trabajadores->apellido !!}</td>
            <td>{!! $trabajadores->fechaDeNacimiento !!}</td>
            <td>{!! $trabajadores->genero->nombre !!}</td>
            <td>{!! $trabajadores->pais->nombre!!}</td>
            <td>{!! $trabajadores->nacionalidad!!}</td>
            <td>{!! $trabajadores->instruccionFormal !!}</td>
            <td>{!! $trabajadores->horasTrabajo !!}</td>
            <td>{!! $trabajadores->salario !!}</td>
            <td>{!! $trabajadores->plandegestionderiesgos->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['trabajadores.destroy', $trabajadores->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if(Auth::user()->tipousuario_id===1)
                    <a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadores.edit', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @else
                    <a href="{!! route('trabajadores.show', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabajadores.edit', [$trabajadores->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    @endif 
                    
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
