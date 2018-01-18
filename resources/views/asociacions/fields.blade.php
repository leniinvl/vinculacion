<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Personaencargada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personaEncargada', 'Personaencargada:') !!}
    {!! Form::text('personaEncargada', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoasociacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAsociacion_id', 'Tipoasociacion Id:') !!}
    {!! Form::number('TipoAsociacion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('asociacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
