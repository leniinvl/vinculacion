<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipoabono Id:') !!}
    {!! Form::select('TipoAbono_id',$abono, null, ['class' => 'form-control'])!!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipocontrolplaga Id:') !!}
    {!! Form::select('TipoControlPlaga_id',$controlPlaga, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipocultivos Id:') !!}
    {!! Form::select('TipoCultivos_id',$cultivo, null, ['class' => 'form-control']) !!}
</div>

<!-- Origeningresos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrigenIngresos_id', 'Origeningresos Id:') !!}
    {!! Form::select('OrigenIngresos_id',$origenIngreso, null, ['class' => 'form-control']) !!}
</div>

<!-- Agricultura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Agricultura_id', 'Agricultura Id:') !!}
    {!! Form::select('Agricultura_id',$agricultura, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
