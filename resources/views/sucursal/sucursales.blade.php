@extends('app')
@section('title')
Sucursales
@endsection
@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@0.7.7/dist/leaflet.css" />
@endsection
@section('content')
<div class="container-fluid">
	{{-- 
	<div class="row slogan">
		EXCELENCIA A LA VISTA
		<div class="long-line"></div>
	</div>
	--}}
	<div class="container-fluid no-padding" style="margin-top: 10px">
		<div class="sucursales-container col-xs-12 no-padding">
			<div class="col-md-2 sucursales-list">
				<ul>
					<li><a href="" id="centro">
						<div>Xalapeños Ilustres</div>
						<div>No. 21 Col. Centro</div>
						<div>(228) 8-17-28-21</div>
					</a></li>
					<li><a href="" id="crystal">
						<div>Plaza Crystal</div>
						<div>Local No. 37 Zona C</div>
						<div>(228) 8-14-29-50</div>
					</a></li>
					<li><a href="" id="americas">
						<div>Plaza Américas</div>
						<div>Col. Pastoressa</div>
						<div>(228) 8-12-53-57</div>
					</a></li>
					<li><a href="" id="museo">
						<div>Plaza Museo</div>
						<div>Av. Lucio Blanco No. 95</div>
						<div>local 9 zona C</div>
						<div>Col. Obrero Campesina</div>
						<div>(228) 8-40-90-60</div>
					</a></li>
					<li><a href="" id="pozarica">
						<div>Poza Rica</div>
						<div>Blvd. Ruíz Cortínez 603</div>
						<div>Esq. Manilo Favio Altamirano</div>
						<div>(782) 1-19-07-74</div>
					</a></li>
					<li><a href="" id="cardel">
						<div>Cardel</div>
						<div>Flores Magón s/n</div>
						<div>Col. Modelo 1a. Sección</div>
						<div>(296) 9-62-02-27</div>
					</a></li>
					<li><a href="" id="mdelat">
						<div>Martinez de la Torre</div>
						<div>Av. Ávila Camacho No. 173</div>
						<div>entre Coopel y OXXO, Zona Centro</div>
						<div>(232) 3-24-33-56</div>
					</a></li>
				</ul>
			</div>
			<div class="col-md-9 sucursales-map no-padding">

				<div id="map"></div>
					
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@0.7.7/dist/leaflet.js"></script>
<script>
var map = L.map('map').setView([19.53, -96.91], 14);
var m = L.icon({
    iconUrl: 'img/sucursales/marker.png',
    shadowUrl: 'img/sucursales/shadow3.png',

    iconSize:     [43, 70], // size of the icon
    shadowSize:   [70, 48], // size of the shadow
    iconAnchor:   [22, 70], // point of the icon which will correspond to marker's location
    shadowAnchor: [5, 43],  // the same for the shadow
    popupAnchor:  [0, -66] // point from which the popup should open relative to the iconAnchor
});
$( document ).ready(function() {
	$('#sucursal').addClass('red');

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
	    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(map);

	L.marker([19.52882114371237, -96.91909611225128], {icon: m}).addTo(map)
    .bindPopup('Xalapeños Ilustres No. 11.<br>Tel. (228) 8 12 28 21');
    //.openPopup(); // para forzar abrir popup

	L.marker([19.51297036553621, -96.87806904315948], {icon: m}).addTo(map)
    .bindPopup('Plaza Américas<br>Tel. (228) 8 12 53 57');

	L.marker([19.538851582326767, -96.90686523914337], {icon: m}).addTo(map)
    .bindPopup('Plaza Crystal<br>Tel. (228) 8 12 53 57'); // falta tel

	L.marker([19.547723754361183, -96.9332903623581], {icon: m}).addTo(map)
    .bindPopup('Plaza Museo<br>Tel. (228) 8 12 53 57');

	L.marker([20.531588, -97.461015], {icon: m}).addTo(map)
    .bindPopup('Poza Rica<br>(782) 1 19 07 74');

	L.marker([19.376249, -96.374852], {icon: m}).addTo(map)
    .bindPopup('Cardel<br>Col. Modelo<br>Tel. (296) 9 62 02 27');

	L.marker([20.080358, -97.029826], {icon: m}).addTo(map)
    .bindPopup('Martinez de la Torre<br>Tel. (228) 8 90 49 07');
    
    map.on('click', function(e) {
    	console.log('Click en mapa: ' + e.latlng);
	});

	$( "#centro" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([19.52882114371237, -96.91909611225128]).setZoom(20);
	});

    $( "#americas" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([19.51297036553621, -96.87806904315948]).setZoom(20);
	});

    $( "#crystal" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([19.538851582326767, -96.90686523914337]).setZoom(20);
	});

    $( "#museo" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([19.547723754361183, -96.9332903623581]).setZoom(20);
	});
    $( "#pozarica" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([20.531588, -97.461015]).setZoom(20);
	});
    $( "#cardel" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([19.376249, -96.374852]).setZoom(20);
	});
    $( "#mdelat" ).click(function(event) {
 		event.preventDefault();
        event.stopPropagation();
		map.panTo([20.080358, -97.029826]).setZoom(20);
	});

});
</script>
@endsection