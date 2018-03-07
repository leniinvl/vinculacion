<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $desecho->id !!}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $desecho->fecha !!}</p>
</div>

<!-- Peso Field -->
<div class="form-group">
    {!! Form::label('peso', 'Peso:') !!}
    <p>{!! $desecho->peso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $desecho->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $desecho->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $desecho->deleted_at !!}</p>
</div>

<!-- Biodigestor Id Field -->
<div class="form-group">
    {!! Form::label('Biodigestor_id', 'Biodigestor Id:') !!}
    <p>{!! $desecho->biodigestor->ubicacion !!}</p>
</div>

