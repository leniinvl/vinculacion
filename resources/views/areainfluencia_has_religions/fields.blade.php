<!-- Religion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Religion_id', 'Religion Id:') !!}
    {!! Form::number('Religion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluenciaHasReligions.index') !!}" class="btn btn-default">Cancelar</a>
</div>
