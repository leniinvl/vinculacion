<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadenacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaDeNacimiento', 'Fecha de Nacimiento:') !!}
    {!! Form::date('fechaDeNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Genero Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Genero_id', 'Género:') !!}
    {!! Form::select('Genero_id', $generos, null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pais_id', 'País:') !!}
    <a href="{{route('pais.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('Pais_id', $paises, null, ['class' => 'form-control']) !!}
</div>

<!-- Nacionalidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
    {!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}
</div>


<!-- Instruccionformal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instruccionFormal', 'Instrucción Formal:') !!}
    {!! Form::text('instruccionFormal', null, ['class' => 'form-control']) !!}
</div>

<!-- Horastrabajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horasTrabajo', 'Horas de Trabajo:') !!}
    {!! Form::number('horasTrabajo', null, ['class' => 'form-control','min' => '0']) !!}
</div>

<!-- Salario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::number('salario', null, ['class' => 'form-control','min' => '0']) !!}
</div>

<!-- Plandegestionderiesgos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PlanDeGestionDeRiesgos_id', 'Plan de Gestión de Riesgos:') !!}
    <a href="{{route('planDeGestionDeRiesgos.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('PlanDeGestionDeRiesgos_id', $plandegestionderiesgos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabajadores.index') !!}" class="btn btn-default">Cancelar</a>
</div>
