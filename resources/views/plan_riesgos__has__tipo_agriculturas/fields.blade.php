<!-- Tipoagricultura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAgricultura_id', 'Tipoagricultura Id:') !!}
    {!! Form::number('TipoAgricultura_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasTipoAgriculturas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
