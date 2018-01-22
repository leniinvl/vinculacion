<!-- Origeningresos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrigenIngresos_id', 'Origeningresos Id:') !!}
    {!! Form::number('OrigenIngresos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgosHasOrigenIngresos.index') !!}" class="btn btn-default">Cancel</a>
</div>
