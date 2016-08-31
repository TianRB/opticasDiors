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

					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>SERVICIOS</b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/examendelavista') }}">Examen de la Vista</a></li>
							<li><a href="{{ url('/oftalmologico') }}">Oftalmológico</a></li>
							<li><a href="{{ url('/contactologia') }}">Contactología</a></li>
							<li><a href="{{ url('/laboriatoriooptico') }}">Laboratorio Óptico</a></li>
							<li><a href="{{ url('/hospitaldeaneojos') }}">Hospital de Anteojos</a></li>
							<li><a href="{{ url('/seguridadindustrial') }}">Seguridad Industrial</a></li>
							<li><a href="{{ url('/garantias') }}">Garantías</a></li>
							<li><a href="{{ url('/opticamovil') }}">Óptica Móvil</a></li>
						</ul>
					</li>

					<li class="hidden-xs hidden-sm"><a href="{{ url('/') }}"><img src="{{ asset('img/logo-small.png') }}" alt="Opticas Diors - Logo" class="logo"></a></li>

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>PRODUCTOS</b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="dropdown-header">Lentes</li>
							<li><a href="#">- Tipos de Lente</a></li>
							<li><a href="#">- Materialies</a></li>
							<li><a href="#">- Diseño</a></li>
							<li><a href="#">- Tratamiento</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Lentes de Contacto</a></li>
							<li><a href="#">Armazones de Línea</a></li>
							<li><a href="#">Armazones de Promoción</a></li>
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