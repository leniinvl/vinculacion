<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lng', 'Lng:') !!}
    {!! Form::text('lng', null, ['class' => 'form-control']) !!}
</div>

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Asociacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Asociacion_id', 'Asociacion Id:') !!}
    {!! Form::number('Asociacion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Producto_id', 'Producto Id:') !!}
    {!! Form::number('Producto_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidadproduccions.index') !!}" class="btn btn-default">Cancel</a>
</div>
