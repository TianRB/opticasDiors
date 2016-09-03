@extends('app')
@section('title')
Sucursales
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
		<div class="long-line"></div>
	</div>
	<div class="container-fluid no-padding">
		<div class="sucursales-container col-xs-12 no-padding">
			<div class="col-md-2 sucursales-list">
				<ul>
					<li><a href="">
						<div>Xalapeños Ilustres</div>
						<div>No. 21 Col. Centro</div>
						<div>(228) 8-17-28-21</div>
					</a></li>
					<li><a href="">
						<div>Plaza Crystal</div>
						<div>Local No. 37 Zona C</div>
						<div>(228) 8-14-29-50</div>
					</a></li>
					<li><a href="">
						<div>Plaza Américas</div>
						<div>Col. Pastoressa</div>
						<div>(228) 8-12-53-57</div>
					</a></li>
					<li><a href="">
						<div>Plaza Museo</div>
						<div>Av. Lucio Blanco No. 95</div>
						<div>local 9 zona C</div>
						<div>Col. Obrero Campesina</div>
						<div>(228) 8-40-90-60</div>
					</a></li>
					<li><a href="">
						<div>Poza Rica</div>
						<div>Blvd. Ruíz Cortínez 603</div>
						<div>Esq. Manilo Favio Altamirano</div>
						<div>(782) 1-19-07-74</div>
					</a></li>
					<li><a href="">
						<div>Cardel</div>
						<div>Flores Magón s/n</div>
						<div>Col. Modelo 1a. Sección</div>
						<div>(296) 9-62-02-27</div>
					</a></li>
					<li><a href="">
						<div>Martinez de la Torre</div>
						<div>Av. Ávila Camacho No. 173</div>
						<div>entre Coopel y OXXO, Zona Centro</div>
						<div>(232) 3-24-33-56</div>
					</a></li>
				</ul>
			</div>
			<div class="col-md-9 sucursales-map no-padding">

				<div id="map"></div>
					<script>
						function initMap() {
							var mapDiv = document.getElementById('map');
							var map = new google.maps.Map(mapDiv, {
								center: {lat: 44.540, lng: -78.546},
								zoom: 8
							});
						}
					</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALRHgHHUNUDbzgN7fcjazuFM9B0dhUva4&callback=initMap">
				</script>

		</div>
	</div>
</div>
</div>
@endsection
@yield('script')
{{-- Link a mapa: https://mapbuildr.com/buildr/jqj4pv mas les pinches vale que no se borre --}}