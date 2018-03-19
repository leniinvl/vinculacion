<!-- Tipoanimales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAnimales_id', 'Tipoanimales Id:') !!}
    {!! Form::number('TipoAnimales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Animales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_animales', 'Cantidad Animales:') !!}
    {!! Form::number('cantidad_animales', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planDeGestionDeRiesgosHasTipoAnimales.index') !!}" class="btn btn-default">Cancel</a>
</div>
