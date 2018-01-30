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
        $('#lng').val(args.latLng.lng());
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