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

<!-- Sexo Field -->
<div class="form-group">
    {!! Form::label('sexo', 'Sexo:') !!}
    <p>{!! $trabajadores->sexo !!}</p>
</div>

<!-- Horastrabajo Field -->
<div class="form-group">
    {!! Form::label('horasTrabajo', 'Horastrabajo:') !!}
    <p>{!! $trabajadores->horasTrabajo !!}</p>
</div>

<!-- Salario Field -->
<div class="form-group">
    {!! Form::label('salario', 'Salario:') !!}
    <p>{!! $trabajadores->salario !!}</p>
</div>

<!-- Planriesgos Id Field -->
<div class="form-group">
    {!! Form::label('PlanRiesgos_id', 'Planriesgos Id:') !!}
    <p>{!! $trabajadores->PlanRiesgos_id !!}</p>
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

