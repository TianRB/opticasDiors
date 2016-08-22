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

					<li><a href="{{ url('/') }}"><b>SALUD VISUAL</b></a></li>

					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><b>SERVICIOS</b> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Examen de la Vista</a></li>
							<li><a href="#">Oftalmológico</a></li>
							<li><a href="#">Contactología</a></li>
							<li><a href="#">Laboratorio Óptico</a></li>
							<li><a href="#">Hospital de Anteojos</a></li>
							<li><a href="#">Seguridad Industrial</a></li>
							<li><a href="#">Garantías</a></li>
							<li><a href="#">Óptica Móvil</a></li>
						</ul>
					</li>

					<li class="hidden-xs hidden-sm"><img src="img/logo.png" alt="Opticas Diors - Logo" class="logo"></li>

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

					<li><a href="{{ url('/') }}"><b class="promociones-menu-item">PROMOCIONES</b></a></li>
					<li><a href="{{ url('/') }}"><b>CONVENIOS</b></a></li>
					<li><a href="{{ url('/') }}"><b>SUCURSAL</b></a></li>

				</ul>
			</div>
		</div>
	</div>
</nav>