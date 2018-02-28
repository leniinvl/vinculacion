<!-- Feriaagricola Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feriaAgricola', 'Feriaagricola:') !!}
    {!! Form::text('feriaAgricola', null, ['class' => 'form-control']) !!}
</div>

<!-- Semillaspropias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semillasPropias', 'Semillaspropias:') !!}
    {!! Form::text('semillasPropias', null, ['class' => 'form-control']) !!}
</div>

<!-- Consumopropio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ConsumoPropio', 'Consumopropio:') !!}
    {!! Form::number('ConsumoPropio', null, ['class' => 'form-control']) !!}
</div>

<!-- Salariofuerafinca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salarioFueraFinca', 'Salariofuerafinca:') !!}
    {!! Form::number('salarioFueraFinca', null, ['class' => 'form-control']) !!}
</div>

<!-- Productosgeneradosvendidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productosGeneradosVendidos', 'Productosgeneradosvendidos:') !!}
    {!! Form::number('productosGeneradosVendidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipoabono Id:') !!}
    {!! Form::select('TipoAbono_id', $tiposabono, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipocontrolplaga Id:') !!}
    {!! Form::select('TipoControlPlaga_id', $tiposcontrolplaga, null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidadproduccion Id:') !!}
    {!! Form::select('UnidadProduccion_id', $unidadesproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
