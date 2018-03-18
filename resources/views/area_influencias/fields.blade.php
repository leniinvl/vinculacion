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

<!-- Manejoambiental Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ManejoAmbiental_id', 'Manejoambiental Id:') !!}
    {!! Form::select('ManejoAmbiental_id', $manejoambiental, null, ['class' => 'form-control']) !!}
</div>

<!-- Usosuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoSuelo_id', 'Usosuelo Id:') !!}
    {!! Form::select('UsoSuelo_id', $usosuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSuelo_id', 'Tiposuelo Id:') !!}
    {!! Form::select('TipoSuelo_id', $tiposuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidadsuelo Id:') !!}
    {!! Form::select('PermeabilidadSuelo_id', $permeabilidadsuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Clima Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clima_id', 'Clima Id:') !!}
    {!! Form::select('Clima_id', $clima, null, ['class' => 'form-control']) !!}
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CondicionesDrenaje_id', 'Condicionesdrenaje Id:') !!}
    {!! Form::select('CondicionesDrenaje_id', $condicionesdrenaje, null, ['class' => 'form-control']) !!}
</div>

<!-- Ecosistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ecosistema_id', 'Ecosistema Id:') !!}
    {!! Form::select('Ecosistema_id', $ecosistema, null, ['class' => 'form-control']) !!}
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CaracteristicasEtnicas_id', 'Caracteristicasetnicas Id:') !!}
    {!! Form::select('CaracteristicasEtnicas_id',  $caracteristicasetnicas, null, ['class' => 'form-control']) !!}
</div>

<!-- Niveltraficodescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nivelTraficoDescripcion', 'Niveltraficodescripcion:') !!}
    {!! Form::textarea('nivelTraficoDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Recirculacionairedescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('recirculacionAireDescripcion', 'Recirculacionairedescripcion:') !!}
    {!! Form::textarea('recirculacionAireDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Organizacionsocialdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('organizacionSocialDescripcion', 'Organizacionsocialdescripcion:') !!}
    {!! Form::textarea('organizacionSocialDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tendenciatierradescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tendenciaTierraDescripcion', 'Tendenciatierradescripcion:') !!}
    {!! Form::textarea('tendenciaTierraDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Abastecimientoaguadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('abastecimientoAguaDescripcion', 'Abastecimientoaguadescripcion:') !!}
    {!! Form::textarea('abastecimientoAguaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionagualluviadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evacuacionAguaLluviaDescripcion', 'Evacuacionagualluviadescripcion:') !!}
    {!! Form::textarea('evacuacionAguaLluviaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Consolidacionareasinfluenciadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('consolidacionAreasInfluenciaDescripcion', 'Consolidacionareasinfluenciadescripcion:') !!}
    {!! Form::textarea('consolidacionAreasInfluenciaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionaguasservidasdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evacuacionAguasServidasDescripcion', 'Evacuacionaguasservidasdescripcion:') !!}
    {!! Form::textarea('evacuacionAguasServidasDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Usovegetaciondescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('usoVegetacionDescripcion', 'Usovegetaciondescripcion:') !!}
    {!! Form::textarea('usoVegetacionDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tradicionesdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tradicionesDescripcion', 'Tradicionesdescripcion:') !!}
    {!! Form::textarea('tradicionesDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipofuentesdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipoFuentesDescripcion', 'Tipofuentesdescripcion:') !!}
    {!! Form::textarea('tipoFuentesDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ruido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ruido', 'Ruido:') !!}
    {!! Form::number('ruido', null, ['class' => 'form-control']) !!}
</div>

<!-- Precipitaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precipitaciones', 'Precipitaciones:') !!}
    {!! Form::number('precipitaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluencias.index') !!}" class="btn btn-default">Cancelar</a>
</div>
