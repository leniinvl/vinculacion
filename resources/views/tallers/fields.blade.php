<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Riesgo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('riesgo', 'Riesgo:') !!}
    {!! Form::textarea('riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('imagen', 'Imágen:') !!}
    {!! Form::textarea('imagen', null, ['class' => 'form-control']) !!}
</div>

<!-- Video Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::textarea('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
    <a href="{{route('unidadproduccions.create')}}">(Añadir)</a>
    {!! Form::select('UnidadProduccion_id', $unidadproduccion ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tallers.index') !!}" class="btn btn-default">Cancel</a>
</div>
