<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipoabono Id:') !!}
    {!! Form::number('TipoAbono_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipocontrolplaga Id:') !!}
    {!! Form::number('TipoControlPlaga_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipocultivos Id:') !!}
    {!! Form::number('TipoCultivos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planGestionRiesgos.index') !!}" class="btn btn-default">Cancel</a>
</div>
