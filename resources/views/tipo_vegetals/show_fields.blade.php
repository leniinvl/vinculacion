<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoVegetal->id !!}</p>
</div>

<!-- Nombre Comun Field -->
<div class="form-group">
    {!! Form::label('nombre_comun', 'Nombre Comun:') !!}
    <p>{!! $tipoVegetal->nombre_comun !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoVegetal->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoVegetal->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $tipoVegetal->deleted_at !!}</p>
</div>

<!-- Nombre Cientifico Field -->
<div class="form-group">
    {!! Form::label('nombre_cientifico', 'Nombre Cientifico:') !!}
    <p>{!! $tipoVegetal->nombre_cientifico !!}</p>
</div>

