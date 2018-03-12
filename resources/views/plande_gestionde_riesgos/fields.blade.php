<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipoabono Id:') !!}
    {!! Form::number('TipoAbono_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipocontrolplaga Id:') !!}
    {!! Form::number('TipoControlPlaga_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipocultivos Id:') !!}
    {!! Form::number('TipoCultivos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoanimales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAnimales_id', 'Tipoanimales Id:') !!}
    {!! Form::number('TipoAnimales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Animales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_animales', 'Cantidad Animales:') !!}
    {!! Form::number('cantidad_animales', null, ['class' => 'form-control']) !!}
</div>

<!-- Origeningresos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrigenIngresos_id', 'Origeningresos Id:') !!}
    {!! Form::number('OrigenIngresos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agricultura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Agricultura_id', 'Agricultura Id:') !!}
    {!! Form::number('Agricultura_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Amenazas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Amenazas_id', 'Amenazas Id:') !!}
    {!! Form::number('Amenazas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vulnerabilidades Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Vulnerabilidades_id', 'Vulnerabilidades Id:') !!}
    {!! Form::number('Vulnerabilidades_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('plandeGestiondeRiesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
