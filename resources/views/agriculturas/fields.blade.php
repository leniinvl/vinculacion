<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
      <a href="{{route('unidadproduccions.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UnidadProduccion_id',$unidadproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Usosuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoSuelo_id', 'Uso de Suelo:') !!}
      <a href="{{route('usoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UsoSuelo_id',$UsoSuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('agriculturas.index') !!}" class="btn btn-default">Cancelar</a>
</div>
