<!-- Propietario Ci Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Propietario_ci', 'Propietario Ci:') !!}
    {!! Form::number('Propietario_ci', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidadProduccionHasPropietarios.index') !!}" class="btn btn-default">Cancelar</a>
</div>
