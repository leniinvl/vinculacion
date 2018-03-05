<!-- Altitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altitud', 'Altitud:') !!}
    {!! Form::number('altitud', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoterrenodescripcion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipoTerrenoDescripcion', 'Tipo Terreno Descripcion:') !!}
    {!! Form::textarea('tipoTerrenoDescripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Detallecalidadaire Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleCalidadAire', 'Detalle Calidad Aire:') !!}
    {!! Form::textarea('detalleCalidadAire', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalleruido Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('detalleRuido', 'Detalle Ruido:') !!}
    {!! Form::textarea('detalleRuido', null, ['class' => 'form-control']) !!}
</div>

<!-- Observacionesecosistema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observacionesEcosistema', 'Observaciones Ecosistema:') !!}
    {!! Form::textarea('observacionesEcosistema', null, ['class' => 'form-control']) !!}
</div>

<!-- Manejoambiental Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ManejoAmbiental_id', 'Manejo Ambiental:') !!}
    <a href="{{route('manejoAmbientals.index')}}">(Añadir Nueva)</a>
    {!! Form::select('ManejoAmbiental_id', $manejoambiental, null, ['class' => 'form-control']) !!}
</div>

<!-- Calidadaire Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CalidadAire_id', 'Calidad Aire:') !!}
    <a href="{{route('calidadAires.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CalidadAire_id', $calidadaire, null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoterreno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoTerreno_id', 'Tipo Terreno:') !!}
    <a href="{{route('tipoTerrenos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoTerreno_id', $tipoterreno, null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSuelo_id', 'Tipo Suelo:') !!}
    <a href="{{route('tipoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoSuelo_id', $tiposuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Calidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CalidadSuelo_id', 'Calidad Suelo:') !!}
    <a href="{{route('calidadSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CalidadSuelo_id', $calidadsuelo, null, ['class' => 'form-control']) !!}
</div>

<!-- Precipitaciones Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Precipitaciones_id', 'Precipitaciones:') !!}
    <a href="{{route('precipitaciones.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Precipitaciones_id', $precipitaciones, null, ['class' => 'form-control']) !!}
</div>

<!-- Nivelfratico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NivelFratico_id', 'Nivel Fratico:') !!}
    <a href="{{route('nivelDeTraficos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('NivelFratico_id', $nivelfratico, null, ['class' => 'form-control']) !!}
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidadsuelo Id:') !!}
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

<!-- Ruido Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ruido_id', 'Ruidos:') !!}
    <a href="{{route('ruidos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Ruido_id', $ruidos, null, ['class' => 'form-control']) !!}
</div>

<!-- Recirculacionaire Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('RecirculacionAire_id', 'Recirculacion de aire:') !!}
    <a href="{{route('recirculacionAires.index')}}">(Añadir Nueva)</a>
    {!! Form::select('RecirculacionAire_id', $recirculacionaires, null, ['class' => 'form-control']) !!}
</div>

<!-- Ecosistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ecosistema_id', 'Ecosistema:') !!}
    <a href="{{route('ecosistemas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Ecosistema_id', $ecosistema, null, ['class' => 'form-control']) !!}
</div>

<!-- Organizacionsocial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrganizacionSocial_id', 'Organizacion Social:') !!}
    <a href="{{route('organizacionSocials.index')}}">(Añadir Nueva)</a>
    {!! Form::select('OrganizacionSocial_id', $organizacionsocial, null, ['class' => 'form-control']) !!}
</div>

<!-- Tendenciatierra Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TendenciaTierra_id', 'Tendencia Tierra:') !!}
    <a href="{{route('tendenciaTierras.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TendenciaTierra_id', $tendenciatierra, null, ['class' => 'form-control']) !!}
</div>

<!-- Abastecimientoagua Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AbastecimientoAgua_id', 'Abastecimiento Agua:') !!}
    <a href="{{route('abastecimientoaguas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('AbastecimientoAgua_id', $abastecimientoagua, null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacoinagualluvia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EvacuacoinAguaLluvia_id', 'Evacuacoin Agua Lluvia:') !!}
    <a href="{{route('evacuacionAguaLluvias.index')}}">(Añadir Nueva)</a>
    {!! Form::select('EvacuacoinAguaLluvia_id', $evacuacionagualluvia, null, ['class' => 'form-control']) !!}
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CaracteristicasEtnicas_id', 'Características Étnicas:') !!}
    <a href="{{route('caracteristicasEtnicas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CaracteristicasEtnicas_id', $caracteristicasetnicas, null, ['class' => 'form-control']) !!}
</div>

<!-- Consolidacionareainfluencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ConsolidacionAreaInfluencia_id', 'Consolidación Área Influencia:') !!}
    <a href="{{route('consolidacionAreaInfluencias.index')}}">(Añadir Nueva)</a>
    {!! Form::select('ConsolidacionAreaInfluencia_id', $consolidacionareainfluencia, null, ['class' => 'form-control']) !!}
</div>

<!-- Evacuacionaguasservidas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('EvacuacionAguasServidas_id', 'Evacuación Aguas Servidas:') !!}
    <a href="{{route('evacuacionAguasServidas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('EvacuacionAguasServidas_id', $evacuacionaguasservidas, null, ['class' => 'form-control']) !!}
</div>


<div id="map"></div>

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
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areainfluencias.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
<script type="text/javascript">

    var map;
    var marker;
    function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -0.179707, lng: -78.506866},
    zoom: 17,
    draggable: true,
    zoomControl: true,
    scrollwheel: true,
    disableDoubleClickZoom: true
    });
    marker = new google.maps.Marker({
    map: map
    });

    google.maps.event.addListener(map, 'click', function(args) {
    console.log(args.latLng.lat());
    $('#lat').val(args.latLng.lat());
    $('#long').val(args.latLng.lng());
    marker.setPosition(args.latLng);
    });



    // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
    paths: triangleCoords,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35,
    clickable: false
    });
    bermudaTriangle.setMap(map);
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTIGv1Whkt5IaGpQe6iifIx3RKz798tr8&callback=initMap"></script>

@endsection

@section('css')

<style type="text/css">
    #map {
    width: 100%;
    height: 300px;
    }
</style>

@endsection
