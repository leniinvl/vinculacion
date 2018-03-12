<!-- Usotierra Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoTierra_id', 'Usotierra Id:') !!}
    {!! Form::number('UsoTierra_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidadproduccion Id:') !!}
    {!! Form::number('UnidadProduccion_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agriculturas.index') !!}" class="btn btn-default">Cancel</a>
</div>
