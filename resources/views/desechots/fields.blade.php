<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso:') !!}
    {!! Form::number('peso', null, ['class' => 'form-control','min' => '0','required' => 'required']) !!}
</div>

<!-- Taller Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Taller_id', 'Taller:') !!}
    <a href="{{route('tallers.create')}}">(Añadir)</a>
    {!! Form::select('Taller_id',$taller, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipodesechot Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoDesechoT_id', 'Tipo de desecho:') !!}
    <a href="{{route('tipoDesechots.create')}}">(Añadir)</a>
    {!! Form::select('TipoDesechoT_id',$tipodesechot, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('desechots.index') !!}" class="btn btn-default">Cancelar</a>
</div>
