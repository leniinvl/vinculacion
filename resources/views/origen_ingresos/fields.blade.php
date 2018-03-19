<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Producción:') !!}
    <a href="{{route('unidadproduccions.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UnidadProduccion_id',$unidadproduccion, null, ['class' => 'form-control']) !!}
</div>

<!-- Propietario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Propietario_id', 'Propietario:') !!}
        <a href="{{route('propietarios.index')}}">(Añadir Nuevo)</a>
    {!! Form::select('Propietario_id',$propietario, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('origenIngresos.index') !!}" class="btn btn-default">Cancel</a>
</div>
