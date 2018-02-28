<!-- Grupoalimentosproductos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('GrupoAlimentosProductos_id', 'Grupoalimentosproductos Id:') !!}
    {!! Form::number('GrupoAlimentosProductos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasGrupoAlimentosProductos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
