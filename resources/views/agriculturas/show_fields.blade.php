<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $agricultura->id !!}</p>
</div>

<!-- Unidadproduccion Id Field -->
<div class="form-group">
    {!! Form::label('UnidadProduccion_id', 'Unidadproduccion Id:') !!}
    <p>{!! $agricultura->UnidadProduccion_id !!}</p>
</div>

<!-- Usosuelo Id Field -->
<div class="form-group">
    {!! Form::label('UsoSuelo_id', 'Usosuelo Id:') !!}
    <p>{!! $agricultura->UsoSuelo_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $agricultura->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $agricultura->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $agricultura->deleted_at !!}</p>
</div>

