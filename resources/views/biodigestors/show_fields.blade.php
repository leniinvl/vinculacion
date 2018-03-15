<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $biodigestor->id !!}</p>
</div>

<!-- Ubicacion Field -->
<div class="form-group">
    {!! Form::label('ubicacion', 'Nombre:') !!}
    <p>{!! $biodigestor->ubicacion !!}</p>
</div>

<!-- Tamañopropiedad Field -->
<div class="form-group">
    {!! Form::label('tamañoPropiedad', 'Tamaño de la Propiedad:') !!}
    <p>{!! $biodigestor->tamañoPropiedad !!}</p>
</div>

<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imagen:') !!}
    <p><img width="300px" src="../imagenes/{!! $biodigestor->imagen !!}"/></p>
</div>

<!-- Video Field -->
<div class="form-group">
    {!! Form::label('video', 'Video:') !!}
    <p>{!! $biodigestor->video !!}</p>
</div>

<!-- Anchobio Field -->
<div class="form-group">
    {!! Form::label('anchoBio', 'Ancho del Biodigestor (metros):') !!}
    <p>{!! $biodigestor->anchoBio !!}</p>
</div>

<!-- Largobio Field -->
<div class="form-group">
    {!! Form::label('largoBio', 'Largo del Biodigestor (m):') !!}
    <p>{!! $biodigestor->largoBio !!}</p>
</div>

<!-- Profundbio Field -->
<div class="form-group">
    {!! Form::label('profundBio', 'Profundidad del Biodigestor (m):') !!}
    <p>{!! $biodigestor->profundBio !!}</p>
</div>

<div class="form-group">
    {!! Form::label('volumenCaja', 'Volumen del Biodigestor (m^3):') !!}
    <p>{!! $biodigestor->profundBio * $biodigestor->largoBio * $biodigestor->anchoBio !!}</p>
</div>

<!-- Anchocaja Field -->
<div class="form-group">
    {!! Form::label('anchoCaja', 'Ancho de la caja de acumulación de desechos (m):') !!}
    <p>{!! $biodigestor->anchoCaja !!}</p>
</div>

<!-- Largocaja Field -->
<div class="form-group">
    {!! Form::label('largoCaja', 'Largo de la caja de acumulación de desechos (m):') !!}
    <p>{!! $biodigestor->largoCaja !!}</p>
</div>

<!-- Profundcaja Field -->
<div class="form-group">
    {!! Form::label('profundCaja', 'Profundidad de la caja de acumulación de desechos (m):') !!}
    <p>{!! $biodigestor->profundCaja !!}</p>
</div>

<!-- Temperatura Field -->
<div class="form-group">
    {!! Form::label('temperatura', 'Temperatura (°C):') !!}
    <p>{!! $biodigestor->temperatura !!}</p>
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group">
    {!! Form::label('Unidad de Produccion', 'Unidad de Producción:') !!}
    <p>{!! $biodigestor->unidadproduccion->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $biodigestor->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $biodigestor->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $biodigestor->deleted_at !!}</p>
</div>

