<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $desechot->id !!}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $desechot->fecha !!}</p>
</div>

<!-- Peso Field -->
<div class="form-group">
    {!! Form::label('peso', 'Peso:') !!}
    <p>{!! $desechot->peso !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Fecha Creación:') !!}
    <p>{!! $desechot->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{!! $desechot->updated_at !!}</p>
</div>


<!-- Taller Id Field -->
<div class="form-group">
    {!! Form::label('Taller_id', 'Taller:') !!}
    <p>{!! $desechot->taller->nombre !!}</p>
</div>

<!-- Tipodesechot Id Field -->
<div class="form-group">
    {!! Form::label('TipoDesechoT_id', 'Tipo de desecho:') !!}
    <p>{!! $desechot->tipodesechot->nombre !!}</p>
</div>

