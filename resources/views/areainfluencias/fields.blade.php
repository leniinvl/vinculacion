<!-- Altitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altitud', 'Altitud:') !!}
    {!! Form::number('altitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoterrenodescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipoTerrenoDescripcion', 'Tipoterrenodescripcion:') !!}
    {!! Form::textarea('tipoTerrenoDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Detallecalidadaire Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleCalidadAire', 'Detallecalidadaire:') !!}
    {!! Form::textarea('detalleCalidadAire', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalleruido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleRuido', 'Detalleruido:') !!}
    {!! Form::textarea('detalleRuido', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacionesecosistema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacionesEcosistema', 'Observacionesecosistema:') !!}
    {!! Form::textarea('observacionesEcosistema', null, ['class' => 'form-control']) !!}
</div>

<!-- Manejoambiental Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ManejoAmbiental_id', 'Manejoambiental Id:') !!}
    {!! Form::number('ManejoAmbiental_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Calidadaire Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CalidadAire_id', 'Calidadaire Id:') !!}
    {!! Form::number('CalidadAire_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoterreno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoTerreno_id', 'Tipoterreno Id:') !!}
    {!! Form::number('TipoTerreno_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSuelo_id', 'Tiposuelo Id:') !!}
    {!! Form::select('TipoSuelo_id',$tiposuelo,null, ['class' => 'form-control']) !!}
</div>

<!-- Calidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CalidadSuelo_id', 'Calidadsuelo Id:') !!}
    {!! Form::select('CalidadSuelo_id',$calidadsuelo,null, ['class' => 'form-control']) !!}
</div>

<!-- Precipitaciones Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Precipitaciones_id', 'Precipitaciones Id:') !!}
    {!! Form::number('Precipitaciones_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivelfratico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NivelFratico_id', 'Nivelfratico Id:') !!}
    {!! Form::number('NivelFratico_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidadsuelo Id:') !!}
    {!! Form::select('PermeabilidadSuelo_id',$permeabilidadsuelos, null, ['class' => 'form-control']) !!}
</div>

<!-- Clima Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clima_id', 'Clima Id:') !!}
    {!! Form::select('Clima_id',$climas ,null, ['class' => 'form-control']) !!}
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CondicionesDrenaje_id', 'Condicionesdrenaje Id:') !!}
    {!! Form::number('CondicionesDrenaje_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruido Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ruido_id', 'Ruidos:') !!}
    {!! Form::select('Ruido_id',$ruidos, null, ['class' => 'form-control']) !!}
</div>

<!-- Recirculacionaire Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RecirculacionAire_id', 'Recirculacion de aire:') !!}
    {!! Form::select('RecirculacionAire_id', $recirculacionaires,null, ['class' => 'form-control']) !!}
</div>

<!-- Ecosistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ecosistema_id', 'Ecosistema Id:') !!}
    {!! Form::number('Ecosistema_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Organizacionsocial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrganizacionSocial_id', 'Organizacionsocial Id:') !!}
    {!! Form::number('OrganizacionSocial_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tendenciatierra Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TendenciaTierra_id', 'Tendenciatierra Id:') !!}
    {!! Form::select('TendenciaTierra_id', $tendenciatierra, null, ['class' => 'form-control']) !!}
</div>

<!-- Abastecimientoagua Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AbastecimientoAgua_id', 'Abastecimientoagua Id:') !!}
    {!! Form::select('AbastecimientoAgua_id', $abastecimientoagua ,null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacoinagualluvia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EvacuacoinAguaLluvia_id', 'Evacuacoinagualluvia Id:') !!}
    {!! Form::number('EvacuacoinAguaLluvia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CaracteristicasEtnicas_id', 'Caracteristicasetnicas Id:') !!}
    {!! Form::number('CaracteristicasEtnicas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Consolidacionareainfluencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ConsolidacionAreaInfluencia_id', 'Consolidacionareainfluencia Id:') !!}
    {!! Form::number('ConsolidacionAreaInfluencia_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionaguasservidas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EvacuacionAguasServidas_id', 'Evacuacionaguasservidas Id:') !!}
    {!! Form::number('EvacuacionAguasServidas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('long', 'Long:') !!}
    {!! Form::text('long', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
