<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipo Abono:') !!}
    <a href="{{route('tipoAbonos.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('TipoAbono_id',$abono, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipo Control Plaga:') !!}
    <a href="{{route('tipoControlPlagas.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('TipoControlPlaga_id',$controlPlaga, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoCultivos_id', 'Tipo Cultivos:') !!}
    <a href="{{route('tipoCultivos.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('TipoCultivos_id',$cultivo, null, ['class' => 'form-control','required' => 'required']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planDeGestionDeRiesgos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
