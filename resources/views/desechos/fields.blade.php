<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso:') !!}
    {!! Form::number('peso', null, ['class' => 'form-control','step'=>'0.01']) !!}
</div>

<!-- Biodigestor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Biodigestor_id', 'Biodigestor:') !!}
    {!! Form::select('Biodigestor_id', $biodigestor ,null, ['class' => 'form-control']) !!}
</div>

<!-- Tipodesecho Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoDesecho_id', 'Tipo Desecho:') !!}
    {!! Form::select('TipoDesecho_id', $tipodesecho ,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('desechos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
