<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $grupoAlimentosProductos->id !!}</p>
</div>

<!--  Nombre Field -->
<div class="form-group">
    {!! Form::label(' nombre', ' Nombre:') !!}
    <p>{!! $grupoAlimentosProductos-> nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $grupoAlimentosProductos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $grupoAlimentosProductos->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $grupoAlimentosProductos->deleted_at !!}</p>
</div>

