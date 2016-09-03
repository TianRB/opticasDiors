<nav class="navbar navbar-default">
	<div class="container-fluid">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div class="container nav-container">
				<ul class="nav navbar-nav">

					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>NUESTRA EMPRESA</b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/quienessomos') }}">¿Quienes Somos?</a></li>
							<li><a href="{{ url('/misionvision') }}">Misión y Visión</a></li>
						</ul>
					</li>

					<li><a href="{{ url('/saludvisual') }}"><b>SALUD VISUAL</b></a></li>

					<li><a href="{{ url('/servicios') }}"><b>SERVICIOS</b></a></li>					

					<li class="hidden-xs hidden-sm"><a href="{{ url('/') }}"><img src="{{ asset('img/logo-small.png') }}" alt="Opticas Diors - Logo" class="logo"></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>PRODUCTOS</b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/lentes') }}">Lentes</a></li>
							<li><a href="{{ url('/armazones') }}">Armazones</a></li>
						</ul>
					</li>

					<li><a href="{{ url('/promociones') }}"><b class="promociones-menu-item">PROMOCIONES</b></a></li>
					<li><a href="{{ url('/convenios') }}"><b>CONVENIOS</b></a></li>
					<li><a href="{{ url('/sucursal') }}"><b>SUCURSAL</b></a></li>

				</ul>
			</div>
		</div>
	</div>
</nav>