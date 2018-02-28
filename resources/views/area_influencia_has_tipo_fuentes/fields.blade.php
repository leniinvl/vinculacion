<!-- Tipofuentes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoFuentes_id', 'Tipofuentes Id:') !!}
    {!! Form::number('TipoFuentes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluenciaHasTipoFuentes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
