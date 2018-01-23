<!-- Topologia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Topologia_id', 'Topologia Id:') !!}
    {!! Form::number('Topologia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluenciaHasTopologias.index') !!}" class="btn btn-default">Cancel</a>
</div>
