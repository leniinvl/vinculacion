<!-- Tradicion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tradicion_id', 'Tradicion Id:') !!}
    {!! Form::number('Tradicion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluenciaHasTradicions.index') !!}" class="btn btn-default">Cancel</a>
</div>
