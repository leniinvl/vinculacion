<!-- Ubicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ubicacion', 'Nombre:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tamañopropiedad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamañoPropiedad', 'Tamaño de la Propiedad:') !!}
    {!! Form::number('tamañoPropiedad', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Imagen Field -->
<div class="form-group">
    {!! Form::label('imagen', 'Imagen:') !!}
    <span class="btn btn-default btn-file">
       Selecciona un archivo {!! Form::file('imagen') !!}
    </span>
</div>

<!-- Video Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::textarea('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Anchobio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anchoBio', 'Ancho del Biodigestor (metros):') !!}
    {!! Form::number('anchoBio', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Largobio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('largoBio', 'Largo del Biodigestor (m):') !!}
    {!! Form::number('largoBio', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Profundbio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profundBio', 'Profundidad del Biodigestor (m):') !!}
    {!! Form::number('profundBio', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Anchocaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anchoCaja', 'Ancho de la caja de acumulación de desechos (m):') !!}
    {!! Form::number('anchoCaja', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Largocaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('largoCaja', 'Largo de la caja de acumulación de desechos (m):') !!}
    {!! Form::number('largoCaja', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Profundcaja Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profundCaja', 'Profundidad de la caja de acumulación de desechos (m):') !!}
    {!! Form::number('profundCaja', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Temperatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('temperatura', 'Temperatura (°C):') !!}
    {!! Form::number('temperatura', null, ['class' => 'form-control','step'=>'0.1']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
     <a href="{{route('unidadproduccions.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UnidadProduccion_id', $unidadproduccion,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('biodigestors.index') !!}" class="btn btn-default">Cancelar</a>
</div>
