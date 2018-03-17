<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $propietario->id !!}</p>
</div>

<!-- Ci Field -->
<div class="form-group">
    {!! Form::label('ci', 'Ci:') !!}
    <p>{!! $propietario->ci !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $propietario->nombre !!}</p>
</div>

<!-- Genero Id Field -->
<div class="form-group">
    {!! Form::label('Genero_id', 'Género:') !!}
    <p>{!! $propietario->genero->nombre!!}</p>
</div>

<!-- Correo Field -->
<div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{!! $propietario->correo !!}</p>
</div>

<!-- Fechanacimiento Field -->
<div class="form-group">
    {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento:') !!}
    <p>{!! $propietario->fechaNacimiento !!}</p>
</div>

<!-- Telefono Field -->
<div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
    <p>{!! $propietario->telefono !!}</p>
</div>

<!-- Observaciones Field -->
<div class="form-group">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    <p>{!! $propietario->observaciones !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $propietario->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $propietario->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $propietario->deleted_at !!}</p>
</div>
