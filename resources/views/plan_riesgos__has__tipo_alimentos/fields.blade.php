<!-- Tipoalimentos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAlimentos_id', 'Tipoalimentos Id:') !!}
    {!! Form::number('TipoAlimentos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasTipoAlimentos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
