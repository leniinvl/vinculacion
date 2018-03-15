<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $taller->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $taller->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    <p>{!! $taller->descripcion !!}</p>
</div>

<!-- Riesgo Field -->
<div class="form-group">
    {!! Form::label('riesgo', 'Riesgo:') !!}
    <p>{!! $taller->riesgo !!}</p>
</div>

<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imágen:') !!}
    <p>{!! $taller->imagen !!}</p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{!! $taller->video !!}</p>
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
    <p>{!! $taller->unidadproduccion->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha Creacion:') !!}
    <p>{!! $taller->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{!! $taller->updated_at !!}</p>
</div>



