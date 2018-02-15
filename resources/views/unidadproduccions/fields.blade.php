<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Lng Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lng', 'Lng:') !!}
    {!! Form::text('lng', null, ['class' => 'form-control']) !!}
</div>

<div id="map">mapa</div>
<input id="pac-input" type="text" placeholder="Search Box">

<!-- Observaciones Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observaciones', 'Observaciones:') !!}
    {!! Form::textarea('observaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Asociacion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Asociacion_id', 'Asociacion Id:') !!}
    {!! Form::select('Asociacion_id', $asociacion, null, ['class' => 'form-control']) !!}
</div>

<!-- Producto Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Producto_id', 'Producto Id:') !!}
    {!! Form::select('Producto_id', $producto, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('unidadproduccions.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
<script>
    var map;
    var marker;
    
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

        google.maps.event.addListener(map, 'click', function(args) {
            console.log(args.latLng.lat());
            $('#lat').val(args.latLng.lat());
            $('#lng').val(args.latLng.lng());
            marker.setPosition(args.latLng);
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        //input.value="prueba";
        var searchBox = new google.maps.places.SearchBox(input);
        //alert(input.value);

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