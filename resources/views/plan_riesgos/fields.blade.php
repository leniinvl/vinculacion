<!-- Feriaagricola Field -->
<div class="form-group col-sm-6">
    {!! Form::label('feriaAgricola', 'Feria Agricola:') !!}
    {!! Form::text('feriaAgricola', null, ['class' => 'form-control']) !!}
</div>

<!-- Semillaspropias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semillasPropias', 'Semillas Propias:') !!}
    {!! Form::text('semillasPropias', null, ['class' => 'form-control']) !!}
</div>

<!-- Consumopropio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ConsumoPropio', 'Consumo Propio:') !!}
    {!! Form::number('ConsumoPropio', null, ['class' => 'form-control']) !!}
</div>

<!-- Salariofuerafinca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('salarioFueraFinca', 'Salario fuera Finca:') !!}
    {!! Form::number('salarioFueraFinca', null, ['class' => 'form-control']) !!}
</div>

<!-- Productosgeneradosvendidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productosGeneradosVendidos', 'Productos Generados Vendidos:') !!}
    {!! Form::number('productosGeneradosVendidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoabono Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoAbono_id', 'Tipo Abono:') !!}
     <a href="{{route('tipoAbonos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoAbono_id', $tiposabono, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoControlPlaga_id', 'Tipo Control Plaga:') !!}
     <a href="{{route('tipoControlPlagas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoControlPlaga_id', $tiposcontrolplaga, null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad Produccion:') !!}
     <a href="{{route('unidadproduccions.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UnidadProduccion_id', $unidadesproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('planRiesgos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
