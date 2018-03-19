<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoproyecto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoProyecto_id', 'Tipo de Proyecto:') !!}
    <a href="{{route('tipoProyectos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoProyecto_id',$tipoproyecto,null, ['class' => 'form-control']) !!}
</div>

<!-- Categoriaproyecto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CategoriaProyecto_id', 'Categoria del Proyecto:') !!}
    <a href="{{route('categoriaProyectos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CategoriaProyecto_id',$categoriaproyecto,null, ['class' => 'form-control']) !!}
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Produccion:') !!}
    <a href="{{route('unidadproduccions.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UnidadProduccion_id',$unidadproduccion,null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('manejoAmbientals.index') !!}" class="btn btn-default">Cancelar</a>
</div>
