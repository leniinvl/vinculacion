<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $users->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $users->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $users->email !!}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{!! $users->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Modificado:') !!}
    <p>{!! $users->updated_at !!}</p>
</div>


<!-- Tipousuario Id Field -->
<div class="form-group">
    {!! Form::label('tipousuario_id', 'Tipousuario:') !!}
    <p>{!! $users->tipousuario->nombre !!}</p>
</div>

<!-- Tipoestado Id Field -->
<div class="form-group">
    {!! Form::label('tipoestado_id', 'Tipoestado:') !!}
    <p>{!! $users->tipoestado->nombre!!}</p>
</div>

