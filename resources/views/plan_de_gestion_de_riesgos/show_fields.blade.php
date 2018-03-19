<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $planDeGestionDeRiesgos->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $planDeGestionDeRiesgos->nombre !!}</p>
</div>

<!-- Tipoabono Id Field -->
<div class="form-group">
    {!! Form::label('TipoAbono_id', 'Tipo de Abono:') !!}
    <p>{!! $planDeGestionDeRiesgos->TipoAbono->nombre !!}</p>
</div>

<!-- Tipocontrolplaga Id Field -->
<div class="form-group">
    {!! Form::label('TipoControlPlaga_id', 'Tipo de Control de Plaga:') !!}
    <p>{!! $planDeGestionDeRiesgos->TipoControlPlaga->nombre !!}</p>
</div>

<!-- Tipocultivos Id Field -->
<div class="form-group">
    {!! Form::label('TipoCultivos_id', 'Tipo de Cultivo:') !!}
    <p>{!! $planDeGestionDeRiesgos->TipoCultivos->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $planDeGestionDeRiesgos->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $planDeGestionDeRiesgos->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $planDeGestionDeRiesgos->deleted_at !!}</p>
</div>
