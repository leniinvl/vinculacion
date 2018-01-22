<!-- Lenguaje Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Lenguaje_id', 'Lenguaje Id:') !!}
    {!! Form::number('Lenguaje_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluenciaHasLenguajes.index') !!}" class="btn btn-default">Cancel</a>
</div>
