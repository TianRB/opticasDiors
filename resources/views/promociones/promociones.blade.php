@extends('app')
@section('title')
Quienes Somos
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	
	<div class="container promo-header text-center ">
		<div class="oval-separator"></div>
			<ul class="promo-header-body list-inline">
				<li>15% de descuento en pago en efectivo<br><span class="smaller">ARMAZONES DE MARCA Y TRATAMIENTOS</span></li>
				<li class="divider"></li>
				<li>3, 6, 9 y 12 meses sin intereses<br>en tarjetas participantes</li>
			</ul>
		<div class="oval-separator"></div>
	</div>

	<div class="promociones-perma-items container">
		<div class="row hidden-sm hidden-xs">
			<div class="col-md-3">
				<div class="promociones-item-img"><img src="img/placeholder.png" alt="monofocal" class="center-block"></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-img"><img src="img/placeholder.png" alt="bifocal" class="center-block"></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-img"><img src="img/placeholder.png" alt="antireflejante" class="center-block"></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-img"><img src="img/placeholder.png" alt="progresivo" class="center-block"></div>
			</div>
		</div>
		<div class="long-separator"></div>
		<div class="row">
			<div class="col-md-3">
				<div class="promociones-item-caption">MONOFOCAL<br><span class="promociones-precio">$450.00</span></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-caption">BIFOCAL<br><span class="promociones-precio">$650.00</span></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-caption">ANTIREFLEJANTE<br><span class="promociones-small">Para computadora</span><br><span class="promociones-precio">$1,350.00</span></div>
			</div>
			<div class="col-md-3">
				<div class="promociones-item-caption">PROGRESIVO<br><span class="promociones-precio">$1,500.00</span></div>
			</div>
		</div>
	</div>
	<div class="promociones-incluye container text-center">
		<div class="oval-separator-red"></div>
		<div>
			INCLUYE
			<ul class="list-inline">
				<li>ARMAZÓN</li>
				<li class="divider"></li>
				<li>ESTUCHE</li>
				<li class="divider"></li>
				<li>GRADUACIÓN</li>
				<li class="divider"></li>
				<li>PAÑO</li>
			</ul>
			<div class="oval-separator-red"></div>
		</div>
	</div>
	<div class="bancos container">
		<div class="row">
			<div class="col-xs-6 col-md-2"><img src="img/logos/bancomer.jpg" alt="bancomer"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/banamex.jpg" alt="banamex"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/banorte.jpg" alt="banorte"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/santander.jpg" alt="santander"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/hsbc.jpg" alt="hsbc"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/inbursa.jpg" alt="inbursa"></div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-2"><img src="img/logos/scotiabank.jpg" alt="scotiabank"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/banregio.jpg" alt="banregio"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/bancamifel.jpg" alt="bancamifiel"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/bancofamsa.jpg" alt="bancofamsa"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/banbajio.jpg" alt="banbajio"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/banjercito.jpg" alt="banjercito"></div>
		</div>
		<div class="row">
			<div class="col-md-offset-4 col-xs-6 col-md-2"><img src="img/logos/ixe.jpg" alt="ixe"></div>
			<div class="col-xs-6 col-md-2"><img src="img/logos/invex.jpg" alt="invex"></div>
		</div>
	</div>
</div>
@endsection
