<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso (kg):') !!}
    {!! Form::number('peso', null, ['class' => 'form-control','step'=>'1','required' => 'required','min' => '0']) !!}
</div>

<!-- Biodigestor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Biodigestor_id', 'Biodigestor:') !!}
     <a href="{{route('biodigestors.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Biodigestor_id', $biodigestor ,null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tipodesecho Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoDesecho_id', 'Tipo de Desecho:') !!}
     <a href="{{route('tipodesechos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoDesecho_id', $tipodesecho ,null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('desechos.index') !!}" class="btn btn-default">Cancelar</a>
</div>

