<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipousuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipousuario_id', 'Tipousuario Id:') !!}
    {!! Form::select('tipousuario_id',$tipousuarios ,null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipoestado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoestado_id', 'Tipoestado Id:') !!}
    {!! Form::select('tipoestado_id', $tipoestados, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancelar</a>
</div>
