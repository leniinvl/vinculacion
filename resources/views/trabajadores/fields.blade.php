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

<!-- Genero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('genero', 'Genero:') !!}
    {!! Form::text('genero', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechadenacimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaDeNacimiento', 'Fechadenacimiento:') !!}
    {!! Form::date('fechaDeNacimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pais_id', 'Pais Id:') !!}
    {!! Form::select('Pais_id', $paises, null, ['class' => 'form-control']) !!}
</div>

<!-- Ciudad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ciudad_id', 'Ciudad Id:') !!}
    {!! Form::select('Ciudad_id', $ciudades, null, ['class' => 'form-control']) !!}
</div>

<!-- Instruccionformal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instruccionFormal', 'Instruccionformal:') !!}
    {!! Form::text('instruccionFormal', null, ['class' => 'form-control']) !!}
</div>

<!-- Horastrabajo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horasTrabajo', 'Horastrabajo:') !!}
    {!! Form::number('horasTrabajo', null, ['class' => 'form-control']) !!}
</div>

<!-- Salario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salario', 'Salario:') !!}
    {!! Form::number('salario', null, ['class' => 'form-control']) !!}
</div>

<!-- Plandegestionderiesgos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PlanDeGestionDeRiesgos_id', 'Plandegestionderiesgos Id:') !!}
    {!! Form::number('PlanDeGestionDeRiesgos_id', null, ['class' => 'form-control']) !!}
    <!-- {!! Form::number('PlanDeGestionDeRiesgos_id', null, ['class' => 'form-control']) !!}-->
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabajadores.index') !!}" class="btn btn-default">Cancel</a>
</div>
