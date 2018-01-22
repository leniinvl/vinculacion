<!-- Usotierra Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoTierra_id', 'Uso tierra:') !!}
    {!! Form::select('UsoTierra_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluenciaHasUsotierras.index') !!}" class="btn btn-default">Cancelar</a>
</div>
