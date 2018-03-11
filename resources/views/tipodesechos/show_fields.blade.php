<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipodesecho->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $tipodesecho->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $tipodesecho->descripcion !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $tipodesecho->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{!! $tipodesecho->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Eliminado el:') !!}
    <p>{!! $tipodesecho->deleted_at !!}</p>
</div>

