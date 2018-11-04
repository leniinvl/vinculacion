<!-- Altitud Field -->
<div class="form-group col-sm-6">
    {!! Form::label('altitud', 'Altitud:') !!}
    {!! Form::number('altitud', null, ['class' => 'form-control','required' => 'required']) !!}
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
    {!! Form::text('lat', null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Long Field -->
<div class="form-group col-sm-6">
    {!! Form::label('long', 'Long:') !!}
    {!! Form::text('long', null, ['class' => 'form-control','required' => 'required']) !!}
</div>


<div class="form-group col-sm-12 col-lg-12">
    <div id="map"></div>
    <input id="pac-input" type="text" placeholder="Search Box">
</div>



<!-- Manejoambiental Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ManejoAmbiental_id', 'Manejo Ambiental:') !!}
    <a href="{{route('manejoAmbientals.index')}}">(Añadir Nueva)</a>
    {!! Form::select('ManejoAmbiental_id', $manejoambiental, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Usosuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('UsoSuelo_id', 'Uso de Suelo:') !!}
    <a href="{{route('usoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('UsoSuelo_id', $usosuelo, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Tiposuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSuelo_id', 'Tipo de Suelo:') !!}
    <a href="{{route('tipoSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('TipoSuelo_id', $tiposuelo, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Permeabilidadsuelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PermeabilidadSuelo_id', 'Permeabilidad del Suelo:') !!}
    <a href="{{route('permeabilidadSuelos.index')}}">(Añadir Nueva)</a>
    {!! Form::select('PermeabilidadSuelo_id', $permeabilidadsuelo, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Clima Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Clima_id', 'Clima:') !!}
    <a href="{{route('climas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Clima_id', $clima, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Condicionesdrenaje Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CondicionesDrenaje_id', 'Condiciones de Drenaje:') !!}
    <a href="{{route('condicionesDrenajes.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CondicionesDrenaje_id', $condicionesdrenaje, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Ecosistema Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ecosistema_id', 'Ecosistema:') !!}
    <a href="{{route('ecosistemas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('Ecosistema_id', $ecosistema, null, ['class' => 'form-control','required' => 'required']) !!}
</div>

<!-- Caracteristicasetnicas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CaracteristicasEtnicas_id', 'Características Étnicas:') !!}
    <a href="{{route('caracteristicasEtnicas.index')}}">(Añadir Nueva)</a>
    {!! Form::select('CaracteristicasEtnicas_id',  $caracteristicasetnicas, null, ['class' => 'form-control','required' => 'required']) !!}
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
    {!! Form::number('ruido', null, ['class' => 'form-control','min' => '0']) !!}
</div>

<!-- Precipitaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precipitaciones', 'Precipitaciones:') !!}
    {!! Form::number('precipitaciones', null, ['class' => 'form-control','min' => '0']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('areaInfluencias.index') !!}" class="btn btn-default">Cancelar</a>
</div>


@section('scripts')
<script>
    var map;
    var marker, lat1, lng1;

    function initMap() {

        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 0.14309590647516032, lng: -78.80012830863114},
            zoom: 10,
            draggable: true,
            zoomControl: true,
            scrollwheel: true,
            disableDoubleClickZoom: true
        });

        marker = new google.maps.Marker({
            map: map
        });

        var latitud=document.getElementById('lat');
        var longitud=document.getElementById('long');


        google.maps.event.addListener(map, 'click', function(args) {
            console.log(args.latLng.lat());
            $('#lat').val(args.latLng.lat());
            $('#long').val(args.latLng.lng());
            marker.setPosition(args.latLng);
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);


        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTIGv1Whkt5IaGpQe6iifIx3RKz798tr8&libraries=places&callback=initMap" async defer></script>
@endsection


@section('css')

<style type="text/css">
#map {
    width: 100%;
    height: 300px;
}

#pac-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    margin-top: 14px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 300px;
}

#pac-input:focus {
    border-color: #4d90fe;
}


</style>

@endsection
