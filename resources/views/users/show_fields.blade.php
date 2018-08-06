

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



<!-- Tipousuario Id Field -->
<div class="form-group">
    {!! Form::label('tipousuario_id', 'Tipousuario:') !!}
    <p>{!! $users->tipousuario->nombre !!}</p>
</div>

