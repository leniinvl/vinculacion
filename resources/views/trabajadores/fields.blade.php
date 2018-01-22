<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
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

<!-- Planriesgos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PlanRiesgos_id', 'Planriesgos Id:') !!}
    {!! Form::number('PlanRiesgos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('trabajadores.index') !!}" class="btn btn-default">Cancel</a>
</div>
