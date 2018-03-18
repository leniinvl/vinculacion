<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $areaInfluencia->id !!}</p>
</div>

<!-- Altitud Field -->
<div class="form-group">
    {!! Form::label('altitud', 'Altitud:') !!}
    <p>{!! $areaInfluencia->altitud !!}</p>
</div>

<!-- Tipoterrenodescripcion Field -->
<div class="form-group">
    {!! Form::label('tipoTerrenoDescripcion', 'Tipo terreno descripcion:') !!}
    <p>{!! $areaInfluencia->tipoTerrenoDescripcion !!}</p>
</div>

<!-- Detallecalidadaire Field -->
<div class="form-group">
    {!! Form::label('detalleCalidadAire', 'Detalle calidad aire:') !!}
    <p>{!! $areaInfluencia->detalleCalidadAire !!}</p>
</div>

<!-- Detalleruido Field -->
<div class="form-group">
    {!! Form::label('detalleRuido', 'Detalle ruido:') !!}
    <p>{!! $areaInfluencia->detalleRuido !!}</p>
</div>

<!-- Observacionesecosistema Field -->
<div class="form-group">
    {!! Form::label('observacionesEcosistema', 'Observaciones ecosistema:') !!}
    <p>{!! $areaInfluencia->observacionesEcosistema !!}</p>
</div>

<!-- Lat Field -->
<div class="form-group">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{!! $areaInfluencia->lat !!}</p>
</div>

<!-- Long Field -->
<div class="form-group">
    {!! Form::label('long', 'Long:') !!}
    <p>{!! $areaInfluencia->long !!}</p>
</div>

<!-- Manejoambiental Id Field -->
<div class="form-group">
    {!! Form::label('ManejoAmbiental_id', 'Manejo Ambiental:') !!}
    <p>{!! $areaInfluencia->ManejoAmbiental->nombre !!}</p>
</div>

<!-- Usosuelo Id Field -->
<div class="form-group">
    {!! Form::label('UsoSuelo_id', 'Uso Suelo:') !!}
    <p>{!! $areaInfluencia->UsoSuelo->nombre !!}</p>
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group">
    {!! Form::label('TipoSuelo_id', 'Tipo Suelo:') !!}
    <p>{!! $areaInfluencia->TipoSuelo->nombre !!}</p>
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidad Suelo:') !!}
    <p>{!! $areaInfluencia->PermeabilidadSuelo->nombre !!}</p>
</div>

<!-- Clima Id Field -->
<div class="form-group">
    {!! Form::label('Clima_id', 'Clima:') !!}
    <p>{!! $areaInfluencia->Clima->nombre !!}</p>
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group">
    {!! Form::label('CondicionesDrenaje_id', 'Condiciones Drenaje:') !!}
    <p>{!! $areaInfluencia->CondicionesDrenaje->nombre !!}</p>
</div>

<!-- Ecosistema Id Field -->
<div class="form-group">
    {!! Form::label('Ecosistema_id', 'Ecosistema:') !!}
    <p>{!! $areaInfluencia->Ecosistema->nombre !!}</p>
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group">
    {!! Form::label('CaracteristicasEtnicas_id', 'Caracteristicas Etnicas:') !!}
    <p>{!! $areaInfluencia->caracteristicasetnica->nombre !!}</p>
</div>

<!-- Niveltraficodescripcion Field -->
<div class="form-group">
    {!! Form::label('nivelTraficoDescripcion', 'Nivel Trafico descripcion:') !!}
    <p>{!! $areaInfluencia->nivelTraficoDescripcion !!}</p>
</div>

<!-- Recirculacionairedescripcion Field -->
<div class="form-group">
    {!! Form::label('recirculacionAireDescripcion', 'Recirculacion Aire descripcion:') !!}
    <p>{!! $areaInfluencia->recirculacionAireDescripcion !!}</p>
</div>

<!-- Organizacionsocialdescripcion Field -->
<div class="form-group">
    {!! Form::label('organizacionSocialDescripcion', 'Organizacion social descripcion:') !!}
    <p>{!! $areaInfluencia->organizacionSocialDescripcion !!}</p>
</div>

<!-- Tendenciatierradescripcion Field -->
<div class="form-group">
    {!! Form::label('tendenciaTierraDescripcion', 'Tendencia tierra descripcion:') !!}
    <p>{!! $areaInfluencia->tendenciaTierraDescripcion !!}</p>
</div>

<!-- Abastecimientoaguadescripcion Field -->
<div class="form-group">
    {!! Form::label('abastecimientoAguaDescripcion', 'Abastecimiento agua descripcion:') !!}
    <p>{!! $areaInfluencia->abastecimientoAguaDescripcion !!}</p>
</div>

<!-- Evacuacionagualluviadescripcion Field -->
<div class="form-group">
    {!! Form::label('evacuacionAguaLluviaDescripcion', 'Evacuacion agua lluvia descripcion:') !!}
    <p>{!! $areaInfluencia->evacuacionAguaLluviaDescripcion !!}</p>
</div>

<!-- Consolidacionareasinfluenciadescripcion Field -->
<div class="form-group">
    {!! Form::label('consolidacionAreasInfluenciaDescripcion', 'Consolidacion areas influencia descripcion:') !!}
    <p>{!! $areaInfluencia->consolidacionAreasInfluenciaDescripcion !!}</p>
</div>

<!-- Evacuacionaguasservidasdescripcion Field -->
<div class="form-group">
    {!! Form::label('evacuacionAguasServidasDescripcion', 'Evacuacion aguas servidas descripcion:') !!}
    <p>{!! $areaInfluencia->evacuacionAguasServidasDescripcion !!}</p>
</div>

<!-- Usovegetaciondescripcion Field -->
<div class="form-group">
    {!! Form::label('usoVegetacionDescripcion', 'Uso vegetacion descripcion:') !!}
    <p>{!! $areaInfluencia->usoVegetacionDescripcion !!}</p>
</div>

<!-- Tradicionesdescripcion Field -->
<div class="form-group">
    {!! Form::label('tradicionesDescripcion', 'Tradiciones descripcion:') !!}
    <p>{!! $areaInfluencia->tradicionesDescripcion !!}</p>
</div>

<!-- Tipofuentesdescripcion Field -->
<div class="form-group">
    {!! Form::label('tipoFuentesDescripcion', 'Tipofuentes descripcion:') !!}
    <p>{!! $areaInfluencia->tipoFuentesDescripcion !!}</p>
</div>

<!-- Ruido Field -->
<div class="form-group">
    {!! Form::label('ruido', 'Ruido:') !!}
    <p>{!! $areaInfluencia->ruido !!}</p>
</div>

<!-- Precipitaciones Field -->
<div class="form-group">
    {!! Form::label('precipitaciones', 'Precipitaciones:') !!}
    <p>{!! $areaInfluencia->precipitaciones !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{!! $areaInfluencia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{!! $areaInfluencia->updated_at !!}</p>
</div>
