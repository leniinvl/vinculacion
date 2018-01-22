<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Ubicación:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tamañopropiedad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamañoPropiedad', 'Tamaño de propiedad:') !!}
    {!! Form::number('tamañoPropiedad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidaddesechos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidadDesechos', 'Cantidad de desechos:') !!}
    {!! Form::number('cantidadDesechos', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de producción:') !!}
    {!! Form::select('UnidadProduccion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('biodigestors.index') !!}" class="btn btn-default">Cancelar</a>
</div>
