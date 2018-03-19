<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $manejoAmbiental->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $manejoAmbiental->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $manejoAmbiental->descripcion !!}</p>
</div>

<!-- Tipoproyecto Id Field -->
<div class="form-group">
    {!! Form::label('TipoProyecto_id', 'Tipo de Proyecto:') !!}
    <p>{!! $manejoAmbiental->TipoProyecto_id !!}</p>
</div>

<!-- Categoriaproyecto Id Field -->
<div class="form-group">
    {!! Form::label('CategoriaProyecto_id', 'Categoria del Proyecto:') !!}
    <p>{!! $manejoAmbiental->CategoriaProyecto_id !!}</p>
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group">
    {!! Form::label('UnidadProduccion_id', 'Unidad de Produccion:') !!}
    <p>{!! $manejoAmbiental->UnidadProduccion_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{!! $manejoAmbiental->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{!! $manejoAmbiental->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Eliminado el:') !!}
    <p>{!! $manejoAmbiental->deleted_at !!}</p>
</div>

