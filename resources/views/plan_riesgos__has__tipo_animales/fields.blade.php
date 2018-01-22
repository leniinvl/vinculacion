<!-- Tipoanimales Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAnimales_id', 'Tipoanimales Id:') !!}
    {!! Form::number('TipoAnimales_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasTipoAnimales.index') !!}" class="btn btn-default">Cancel</a>
</div>
