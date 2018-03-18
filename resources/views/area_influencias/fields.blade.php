<!-- Altitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altitud', 'Altitud:') !!}
    {!! Form::number('altitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoterrenodescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipoTerrenoDescripcion', 'Descripción del tipo de Terreno:') !!}
    {!! Form::textarea('tipoTerrenoDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Detallecalidadaire Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleCalidadAire', 'Detalle de la Calidad del Aire:') !!}
    {!! Form::textarea('detalleCalidadAire', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalleruido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleRuido', 'Detalle de Ruido:') !!}
    {!! Form::textarea('detalleRuido', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacionesecosistema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacionesEcosistema', 'Observaciones del Ecosistema:') !!}
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
    {!! Form::label('ManejoAmbiental_id', 'Manejo Ambiental:') !!}
    <a href="{{route('manejoAmbientals.index')}}">(Añadir Nueva)</a>
    {!! Form::select('ManejoAmbiental_id', $manejoambiental, null, ['class' => 'form-control']) !!}
</div>

<!-- Usosuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoSuelo_id', 'Uso de Suelo:') !!}
    <a href="{{route('usoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UsoSuelo_id', $usosuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSuelo_id', 'Tipo de Suelo:') !!}
    <a href="{{route('tipoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoSuelo_id', $tiposuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidad del Suelo:') !!}
    <a href="{{route('permeabilidadSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('PermeabilidadSuelo_id', $permeabilidadsuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Clima Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clima_id', 'Clima:') !!}
    <a href="{{route('climas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Clima_id', $clima, null, ['class' => 'form-control']) !!}
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CondicionesDrenaje_id', 'Condiciones de Drenaje:') !!}
    <a href="{{route('condicionesDrenajes.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CondicionesDrenaje_id', $condicionesdrenaje, null, ['class' => 'form-control']) !!}
</div>

<!-- Ecosistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ecosistema_id', 'Ecosistema:') !!}
    <a href="{{route('ecosistemas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Ecosistema_id', $ecosistema, null, ['class' => 'form-control']) !!}
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CaracteristicasEtnicas_id', 'Características Étnicas:') !!}
    <a href="{{route('caracteristicasEtnicas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CaracteristicasEtnicas_id',  $caracteristicasetnicas, null, ['class' => 'form-control']) !!}
</div>

<!-- Niveltraficodescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('nivelTraficoDescripcion', 'Descipción del Nivel de Tráfico:') !!}
    {!! Form::textarea('nivelTraficoDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Recirculacionairedescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('recirculacionAireDescripcion', 'Descripción de Recirculación del Aire:') !!}
    {!! Form::textarea('recirculacionAireDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Organizacionsocialdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('organizacionSocialDescripcion', 'Descripción de Organización Social:') !!}
    {!! Form::textarea('organizacionSocialDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tendenciatierradescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tendenciaTierraDescripcion', 'Descripción de Tendencia de Tierra:') !!}
    {!! Form::textarea('tendenciaTierraDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Abastecimientoaguadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('abastecimientoAguaDescripcion', 'Descripción de Abastecimiento de Agua:') !!}
    {!! Form::textarea('abastecimientoAguaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionagualluviadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evacuacionAguaLluviaDescripcion', 'Descripción de Evacuación de Agua Lluvia:') !!}
    {!! Form::textarea('evacuacionAguaLluviaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Consolidacionareasinfluenciadescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('consolidacionAreasInfluenciaDescripcion', 'Descripción de Consolidación de Areas de Influencia:') !!}
    {!! Form::textarea('consolidacionAreasInfluenciaDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionaguasservidasdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('evacuacionAguasServidasDescripcion', 'Descripción de Evacuación de Aguas Servidas:') !!}
    {!! Form::textarea('evacuacionAguasServidasDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Usovegetaciondescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('usoVegetacionDescripcion', 'Descripción de Uso de Vegetación:') !!}
    {!! Form::textarea('usoVegetacionDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tradicionesdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tradicionesDescripcion', 'Descripción de Tradiciones:') !!}
    {!! Form::textarea('tradicionesDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipofuentesdescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipoFuentesDescripcion', 'Descripción de Tipo de Fuentes:') !!}
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
