<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $asociacion->nombre !!}</p>
</div>

<!-- Personaencargada Field -->
<div class="form-group">
    {!! Form::label('personaEncargada', 'Persona encargada:') !!}
    <p>{!! $asociacion->personaEncargada !!}</p>
</div>

<!-- Tipoasociacion Id Field -->
<div class="form-group">
    {!! Form::label('TipoAsociacion_id', 'Tipoasociacion:') !!}
    <p>{!! $asociacion->TipoAsociacion_id !!}</p>
</div>

