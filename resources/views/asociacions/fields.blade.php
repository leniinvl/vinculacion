<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Personaencargada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personaEncargada', 'Persona encargada:') !!}
    {!! Form::text('personaEncargada', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoasociacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAsociacion_id', 'Tipo asociacion:') !!}
    {!! Form::select('TipoAsociacion_id', $tiposasociacion, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('asociacions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
