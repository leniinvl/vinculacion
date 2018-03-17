<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $trabajadores->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $trabajadores->nombre !!}</p>
</div>

<!-- Apellido Field -->
<div class="form-group">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{!! $trabajadores->apellido !!}</p>
</div>

<!-- Fechadenacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaDeNacimiento', 'Fecha de Nacimiento:') !!}
    <p>{!! $trabajadores->fechaDeNacimiento !!}</p>
</div>

<!-- Genero Id Field -->
<div class="form-group">
    {!! Form::label('Genero_id', 'Género:') !!}
    <p>{!! $trabajadores->genero->nombre !!}</p>
</div>

<!-- Pais Id Field -->
<div class="form-group">
    {!! Form::label('Pais_id', 'País:') !!}
    <p>{!! $trabajadores->pais->nombre !!}</p>
</div>

<!-- Ciudad Id Field -->
<div class="form-group">
    {!! Form::label('Ciudad_id', 'Ciudad:') !!}
    <p>{!! $trabajadores->ciudad->nombre !!}</p>
</div>

<!-- Instruccionformal Field -->
<div class="form-group">
    {!! Form::label('instruccionFormal', 'Instrucción Formal:') !!}
    <p>{!! $trabajadores->instruccionFormal !!}</p>
</div>

<!-- Horastrabajo Field -->
<div class="form-group">
    {!! Form::label('horasTrabajo', 'Horas de Trabajo:') !!}
    <p>{!! $trabajadores->horasTrabajo !!}</p>
</div>

<!-- Salario Field -->
<div class="form-group">
    {!! Form::label('salario', 'Salario:') !!}
    <p>{!! $trabajadores->salario !!}</p>
</div>

<!-- Plandegestionderiesgos Id Field -->
<div class="form-group">
    {!! Form::label('PlanDeGestionDeRiesgos_id', 'Plan de Gestión de Riesgos:') !!}
    <p>{!! $trabajadores->plandegestionderiesgos->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $trabajadores->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $trabajadores->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $trabajadores->deleted_at !!}</p>
</div>
