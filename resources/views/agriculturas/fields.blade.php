<!-- Usotierra Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoTierra_id', 'Usotierra:') !!}
    {!! Form::select('UsoTierra_id',$UsoTierra, null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidadproduccion:') !!}
{!! Form::select('UnidadProduccion_id',$unidadproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agriculturas.index') !!}" class="btn btn-default">Cancel</a>
</div>
