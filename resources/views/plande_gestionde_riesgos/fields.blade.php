<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipo abono:') !!}
    {!! Form::select('TipoAbono_id',$abono, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipo control plaga:') !!}
    {!! Form::select('TipoControlPlaga_id',$controlPlaga, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipo cultivos:') !!}
    {!! Form::select('TipoCultivos_id',$cultivo, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoanimales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAnimales_id', 'Tipo animales:') !!}
    {!! Form::select('TipoAnimales_id',$animale, null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Animales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_animales', 'Cantidad Animales:') !!}
    {!! Form::number('cantidad_animales', null, ['class' => 'form-control']) !!}
</div>

<!-- Origeningresos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrigenIngresos_id', 'Origen ingresos:') !!}
    {!! Form::select('OrigenIngresos_id',$origenIngreso, null, ['class' => 'form-control']) !!}
</div>

<!-- Agricultura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Agricultura_id', 'Agricultura:') !!}
    {!! Form::select('Agricultura_id',$agricultura, null, ['class' => 'form-control']) !!}
</div>

<!-- Amenazas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Amenazas_id', 'Amenazas:') !!}
    {!! Form::select('Amenazas_id',$amenaza, null, ['class' => 'form-control']) !!}
</div>

<!-- Vulnerabilidades Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Vulnerabilidades_id', 'Vulnerabilidades:') !!}
    {!! Form::select('Vulnerabilidades_id',$vulnerabilidade, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('plandeGestiondeRiesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
