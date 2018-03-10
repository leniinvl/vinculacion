<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoProduccion_id', 'Tipoproduccion Id:') !!}
    {!! Form::number('TipoProduccion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipounidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoUnidad_id', 'Tipounidad Id:') !!}
    {!! Form::number('TipoUnidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Destino Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Destino_id', 'Destino Id:') !!}
    {!! Form::number('Destino_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Precuaria Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Precuaria_id', 'Precuaria Id:') !!}
    {!! Form::number('Precuaria_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tipoanimales.index') !!}" class="btn btn-default">Cancel</a>
</div>
