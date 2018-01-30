<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $areainfluencia->id !!}</p>
</div>

<!-- Altitud Field -->
<div class="form-group">
    {!! Form::label('altitud', 'Altitud:') !!}
    <p>{!! $areainfluencia->altitud !!}</p>
</div>

<!-- Tipoterrenodescripcion Field -->
<div class="form-group">
    {!! Form::label('tipoTerrenoDescripcion', 'Tipoterrenodescripcion:') !!}
    <p>{!! $areainfluencia->tipoTerrenoDescripcion !!}</p>
</div>

<!-- Detallecalidadaire Field -->
<div class="form-group">
    {!! Form::label('detalleCalidadAire', 'Detallecalidadaire:') !!}
    <p>{!! $areainfluencia->detalleCalidadAire !!}</p>
</div>

<!-- Detalleruido Field -->
<div class="form-group">
    {!! Form::label('detalleRuido', 'Detalleruido:') !!}
    <p>{!! $areainfluencia->detalleRuido !!}</p>
</div>

<!-- Observacionesecosistema Field -->
<div class="form-group">
    {!! Form::label('observacionesEcosistema', 'Observacionesecosistema:') !!}
    <p>{!! $areainfluencia->observacionesEcosistema !!}</p>
</div>

<!-- Manejoambiental Id Field -->
<div class="form-group">
    {!! Form::label('ManejoAmbiental_id', 'Manejoambiental Id:') !!}
    <p>{!! $areainfluencia->ManejoAmbiental->nombre !!}</p>
</div>

<!-- Calidadaire Id Field -->
<div class="form-group">
    {!! Form::label('CalidadAire_id', 'Calidadaire Id:') !!}
    <p>{!! $areainfluencia->CalidadAire->nombre !!}</p>
</div>

<!-- Tipoterreno Id Field -->
<div class="form-group">
    {!! Form::label('TipoTerreno_id', 'Tipoterreno Id:') !!}
    <p>{!! $areainfluencia->TipoTerreno->nombre !!}</p>
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group">
    {!! Form::label('TipoSuelo_id', 'Tiposuelo Id:') !!}
    <p>{!! $areainfluencia->TipoSuelo->nombre !!}</p>
</div>

<!-- Calidadsuelo Id Field -->
<div class="form-group">
    {!! Form::label('CalidadSuelo_id', 'Calidadsuelo Id:') !!}
    <p>{!! $areainfluencia->CalidadSuelo->nombre !!}</p>
</div>

<!-- Precipitaciones Id Field -->
<div class="form-group">
    {!! Form::label('Precipitaciones_id', 'Precipitaciones Id:') !!}
    <p>{!! $areainfluencia->Precipitaciones->nombre !!}</p>
</div>

<!-- Nivelfratico Id Field -->
<div class="form-group">
    {!! Form::label('NivelFratico_id', 'Nivelfratico Id:') !!}
    <p>{!! $areainfluencia->NivelFratico->nombre !!}</p>
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidadsuelo Id:') !!}
    <p>{!! $areainfluencia->PermeabilidadSuelo->nombre !!}</p>
</div>

<!-- Clima Id Field -->
<div class="form-group">
    {!! Form::label('Clima_id', 'Clima Id:') !!}
    <p>{!! $areainfluencia->Clima->nombre !!}</p>
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group">
    {!! Form::label('CondicionesDrenaje_id', 'Condicionesdrenaje Id:') !!}
    <p>{!! $areainfluencia->CondicionesDrenaje->nombre !!}</p>
</div>

<!-- Ruido Id Field -->
<div class="form-group">
    {!! Form::label('Ruido_id', 'Ruido Id:') !!}
    <p>{!! $areainfluencia->Ruido->nombre !!}</p>
</div>

<!-- Recirculacionaire Id Field -->
<div class="form-group">
    {!! Form::label('RecirculacionAire_id', 'Recirculacionaire Id:') !!}
    <p>{!! $areainfluencia->RecirculacionAire->nombre !!}</p>
</div>

<!-- Ecosistema Id Field -->
<div class="form-group">
    {!! Form::label('Ecosistema_id', 'Ecosistema Id:') !!}
    <p>{!! $areainfluencia->Ecosistema->nombre !!}</p>
</div>

<!-- Organizacionsocial Id Field -->
<div class="form-group">
    {!! Form::label('OrganizacionSocial_id', 'Organizacionsocial Id:') !!}
    <p>{!! $areainfluencia->OrganizacionSocial->nombre !!}</p>
</div>

<!-- Tendenciatierra Id Field -->
<div class="form-group">
    {!! Form::label('TendenciaTierra_id', 'Tendenciatierra Id:') !!}
    <p>{!! $areainfluencia->TendenciaTierra->nombre !!}</p>
</div>

<!-- Abastecimientoagua Id Field -->
<div class="form-group">
    {!! Form::label('AbastecimientoAgua_id', 'Abastecimientoagua Id:') !!}
    <p>{!! $areainfluencia->AbastecimientoAgua->nombre !!}</p>
</div>

<!-- Evacuacoinagualluvia Id Field -->
<div class="form-group">
    {!! Form::label('EvacuacoinAguaLluvia_id', 'Evacuacoinagualluvia Id:') !!}
    <p>{!! $areainfluencia->EvacuacionAguaLluvia->nombre !!}</p>
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group">
    {!! Form::label('CaracteristicasEtnicas_id', 'Caracteristicasetnicas Id:') !!}
    <p>{!! $areainfluencia->CaracteristicasEtnicas->nombre !!}</p>
</div>

<!-- Consolidacionareainfluencia Id Field -->
<div class="form-group">
    {!! Form::label('ConsolidacionAreaInfluencia_id', 'Consolidacionareainfluencia Id:') !!}
    <p>{!! $areainfluencia->ConsolidacionAreaInfluencia->nombre !!}</p>
</div>

<!-- Evacuacionaguasservidas Id Field -->
<div class="form-group">
    {!! Form::label('EvacuacionAguasServidas_id', 'Evacuacionaguasservidas Id:') !!}
    <p>{!! $areainfluencia->EvacuacionAguasServidas->nombre !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $areainfluencia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $areainfluencia->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $areainfluencia->deleted_at !!}</p>
</div>

<!-- Lat Field -->
<div class="form-group">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{!! $areainfluencia->lat !!}</p>
</div>

<!-- Long Field -->
<div class="form-group">
    {!! Form::label('long', 'Long:') !!}
    <p>{!! $areainfluencia->long !!}</p>
</div>
