<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipocultivos Id:') !!}
    {!! Form::number('TipoCultivos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasTipoCultivos.index') !!}" class="btn btn-default">Cancel</a>
</div>
