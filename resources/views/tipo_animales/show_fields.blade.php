<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoAnimales->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $tipoAnimales->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoAnimales->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoAnimales->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $tipoAnimales->deleted_at !!}</p>
</div>

<!-- Tipoproduccion Id Field -->
<div class="form-group">
    {!! Form::label('TipoProduccion_id', 'Tipoproduccion:') !!}
    <p>{!! $tipoAnimales->TipoProduccion->nombre !!}</p>
</div>

<!-- Tipounidad Id Field -->
<div class="form-group">
    {!! Form::label('TipoUnidad_id', 'Tipounidad:') !!}
    <p>{!! $tipoAnimales->tipounidad ->nombre !!}</p>
</div>

<!-- Destino Id Field -->
<div class="form-group">
    {!! Form::label('Destino_id', 'Destino:') !!}
    <p>{!! $tipoAnimales->destino->nombre !!}</p>
</div>

<!-- Precuaria Id Field -->
<div class="form-group">
    {!! Form::label('Precuaria_id', 'Precuaria:') !!}
    <p>{!! $tipoAnimales->precuaria->nombre !!}</p>
</div>
