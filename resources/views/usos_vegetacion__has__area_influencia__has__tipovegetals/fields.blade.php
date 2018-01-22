<!-- Areainfluencia Has Tipovegetal Areainfluencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AreaInfluencia_has_TipoVegetal_AreaInfluencia_id', 'Areainfluencia Has Tipovegetal Areainfluencia Id:') !!}
    {!! Form::number('AreaInfluencia_has_TipoVegetal_AreaInfluencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Areainfluencia Has Tipovegetal Tipovegetal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AreaInfluencia_has_TipoVegetal_TipoVegetal_id', 'Areainfluencia Has Tipovegetal Tipovegetal Id:') !!}
    {!! Form::number('AreaInfluencia_has_TipoVegetal_TipoVegetal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('usosVegetacionHasAreaInfluenciaHasTipovegetals.index') !!}" class="btn btn-default">Cancel</a>
</div>
