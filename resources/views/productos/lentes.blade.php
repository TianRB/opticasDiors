@extends('app')
@section('title')
Lentes
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	<div class="long-separator" style="margin:0;margin-bottom:15px;"></div>
	<div class="productos-header text-center">
		<div>Productos</div>
		<div>LENTES</div>
	</div>
	<div class="container-fluid">
		<video src="img/productos/chica.webm" class="center-block  img-responsive" autoplay loop></video>
		<div class="tLentes row text-center">
			<div class="col-md-4">
				<a href="#" id="monofocal">
					<img src="img/productos/lentes-3.png" alt="monofocales">
					<div>
						<span>Visión Cercana</span>
						<span>Visión Intermedia</span>
						<span>Visión Lejana</span>
					</div>
					<div>MONOFOCAL</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" id="bifocal">
					<img src="img/productos/lentes-1.png" alt="bifocales">
					<div>
						<span>Visión Cercana</span>
						<span>Visión Lejana</span>
					</div>
					<div>BIFOCAL</div>
				</a>
			</div>
			<div class="col-md-4">
				<a href="#" id="progresivo">
					<img src="img/productos/lentes-2.png" alt="progresivos">
					<div>
						<span>Visión Cercana</span>
						<span>Visión Intermedia</span>
						<span>Visión Lejana</span>
					</div>
					<div>PROGRESIVO</div>
				</a>
			</div>
		</div>

		<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>
		<div class="tLentes-tgt"></div>
		<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>

		<div class="materiales row">
			<h1>MATERIALES</h1>
			<video src="img/productos/lentescolor.webm" class="center-block img-responsive" autoplay loop></video>
			<div class="col-md-4 col-xs-12 text-center"><h3>CR-39</h3>
				<p>Se trata de un polímero plástico, por lo que tiene menor resistencia a los impactos, Es el material más utilizado por ser el más económico, por lo cual la calidad visual que ofrece es muy sencilla. Es recomendable para graduaciones +/- menores a 3 dioptrías, ya que al ser más graduación aumenta el grosor y su peso. Es ideal para armazones de aro completo en pasta o metal ya que protege la lente de impactos laterales o presiones involuntarias, no se recomienda en armazones de tres piezasoranurados.</p>
			</div>
			<div class="col-md-4 col-xs-12 text-center"><h3>POLICARBONATO</h3>
				<p>El policarbonato es un material termoplástico acomodado molecularmente lo que da como resultado mayor resistencia a los golpes y ralladuras aproximadamente 12 veces más que un CR-39, la calidad visual mejora considerablemente ya que trasmite más la luz, recomendada para todas las graduaciones, ya que debido a su proceso de elaboración, hace que las lentes sean mucho más delgadas y resistentes. Es ideal para todo tipo de armazones.</p>
				<p>Cumple con la normatividad ANSI Z87 para protección industrial, deportes con riesgo de impactos, protección laboral, entre muchos otros usos.</p>
			</div>
			<div class="col-md-4 col-xs-12 text-center"><h3>ALTO ÍNDICE</h3>
				<p>Un lente de alto índice es un lente que tiene un “índice” más alto de refracción. Esto significa que tiene una capacidad superior de desviar los rayos de luz para ofrecer nitidez de visión a las personas con más graduación.                        
					Son más delgados, más livianos que un policarbonato, pero no más resistentes, es por ello que se recomienda en armazones de aro completo en metal o pasta para proteger la lente de golpes.El lente de alto índice es recomendado exclusivamente a personas con graduaciones muy altas, su tecnología ofrece un 30% más naturalidad estética, es decir ¡Adiós a tus ojos de botella!</p>
				</div>
			</div>
			<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>

			<div class="tratamientos text-center">
				<h1>TRATAMIENTOS</h1>
				<video src="img/productos/lentesbyn.webm" class="center-block img-responsive" autoplay loop></video>
				<div class="row" style="margin-top:30px;">
					<div class="col-md-4">
						<a href="#" id="antirreflejante">ANTIREFLEJANTE</a>
					</div>
					<div class="col-md-4">
						<a href="#" id="fotocromatico">FOTOCROMÁTICO</a>
					</div>
					<div class="col-md-4">
						<a href="#" id="polarizado">POLARIZADO</a>
					</div>
				</div>
				<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>
				<div class="tratamientos-tgt"></div>
				<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>
				<div class="economicos">
					<h1>Armazones Económicos</h1>
					<p>Ópticas Diors trae armazones que se adecuan a las necesidades económicas de nuestros clientes, trayendo calidad a un precio incomparable, seleccionamos los mejores armazones de muchos proveedores para así tener un inventario fresco y surtido, a nosotros no nos gusta repetir así que hacemos lo posible por traer armazones únicos, ya que sabemos que cada uno de nuestros clientes es diferente, por eso no encontraras los mismos modelos, mes con mes se actualizan nuestros inventarios, así que si ves alguno que te guste, no lo dudes ¡llévatelo! Ya que es casi imposible volver a verlo.</p>
				</div>
			</div>
		</div>
		<div style="background-color:#ccc;height:2px;margin:15px 0;"></div>

		<div class="aviso">
			<video src="img/productos/rihana.webm" class="center-block img-responsive" autoplay loop></video>
			<p>Ópticas Diors maneja las mejores marcas a nivel mundial ofreciendo calidad y seguridad, notaras que la calidad visual, que ofrecemos es superior a otra que hayas probado, todos nuestros productos cuentan con autenticidades.</p>
			<p>¡EXÍJALAS!</p>
		</div>
	</div>

	@endsection
	@section('script')
	<script>
		$( document ).ready(function() {
	$('#productos').addClass('red');

	/* ##############################
		Tipos de Lentes
		*/
		$( "#monofocal" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#monofocal" ).addClass("tLentes-active");
			$( "#bifocal" ).removeClass("tLentes-active");
			$( "#progresivo" ).removeClass("tLentes-active");
			var descr = 
			'<h1>MONOFOCAL</h1>'
			+'<p class="text-center">Este tipo de lentes, se caracterizan por tener un solo punto de enfoque es decir una sola graduación en toda la lente, se recomienda a personas de 1 a 39 años, los Monofocales pueden corregir los errores refractivos.</p>'
			+'<ul class="text-center">'
			+'<li class="text-center"><div>LA MIOPÍA<br><span>Con dioptrías negativas</span></div></li>'
			+'<li class="text-center"><div>LA HIPERMETROPÍA<br><span>Con dioptrías positivas</span></div></li>'
			+'<li class="text-center"><div>EL ASTIGMATISMO<br><span>Con dioptrías negativas cilíndricas</span></div></li></ul>'
			+'<p class="text-center" style="font-style:italic;font-family:didot;font-weight: bold;">Incluso se pueden utilizar para corregir la presbicia o vista cansada</p>'
			+'<p class="text-center">Para poder realizar una lente monofocal es necesario un material, dependiendo el material determinara su resistencia a las ralladuras, resistencia a los golpes, grosor de la lente y su calidad visual. También se pueden agregar tratamientos que mejoran la durabilidad de tu lente y otros que mejoran considerablemente tu calidad visual.</p>'
			$('.tLentes-tgt').html(descr);
		});
		$( "#bifocal" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#monofocal" ).removeClass("tLentes-active");
			$( "#bifocal" ).addClass("tLentes-active");
			$( "#progresivo" ).removeClass("tLentes-active");
			var descr = 
			'<h1>BIFOCAL</h1>'
			+'<p class="text-center">Este tipo de lentes, se caracteriza por tener dos puntos de enfoque, uno para la visión lejana y otro para la visión cercana, son para personas mayores a los 40 años las cuales padecen presbicia, conocida como vista cansada, se debe a la reducción natural de la capacidad para enfocar objetos cercanos. La parte de arriba de la lente sirve para la visión lejana y la media luna colocada en la parte inferior es para la visión cercana. Hay diferentes tipos de bifocales: blended, ejecutivo y el más conocido el Flat top 28, sefiere a la lente aplanada una sobre otra, el numero 28 es lo que mide la media luna.</p>'
			$('.tLentes-tgt').html(descr);
		});
		$( "#progresivo" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#monofocal" ).removeClass("tLentes-active");
			$( "#bifocal" ).removeClass("tLentes-active");
			$( "#progresivo" ).addClass("tLentes-active");
			var descr = 
			'<h1>PROGRESIVO</h1>'
			+'<p class="text-center">Este tipo de lente enfocado a personas mayores de 40 años que padecen presbicia, se caracteriza por corregir las tres visiones: cercana, intermedia y lejana, ofreciendo una visión natural, ya que por medio de cálculos avanzados generados en un software, crean diseños especializados a las necesidades visuales de cada persona.<br>Dependiendo el diseño del lente progresivo mejorará tu calidad visual. Los diseños más sencillos tienen mayores campos de aberración a los lados y la transición entre las tres muy notoria e incómoda, por consiguiente te tomara mayor tiempo adaptarte. Entre mayor tecnología en el diseño del progresivo, mayor comodidad y menor aberración a los lados, te facilitara la transición de las tres distancias, además de que te tomara muy poco tiempo adaptarte.</p>'
			$('.tLentes-tgt').html(descr);
		});
		$('#monofocal').click();

	/* ##############################
		Tratamientos
		*/
		$( "#antirreflejante" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#antirreflejante" ).addClass("tLentes-active");
			$( "#fotocromatico" ).removeClass("tLentes-active");
			$( "#polarizado" ).removeClass("tLentes-active");
			var descr = 
			'<h1>ANTIREFLEJANTE</h1>'
			+'<p class="text-center">El anti reflejante es un tratamiento que se aplica al material de la lente, hay diferentes maneras para aplicar este tratamiento, el método spin y el método de alto vacío. Dependiendo del elemento que le apliquen y su método de aplicación, determinara su durabilidad color y beneficios.</p>'
			+'<p class="text-center">El efecto que produce es que la lente se vuelve totalmente trasparente haciendo más confortable la visión, ya que elimina los reflejos propios de la lente. Protege  del síndrome de visión en computadora y ofrece una protección UV de 400nm, además de protegerte de las luces artificiales focos, tv, celulares, computadoras etc.</p>'
			+'<p class="text-center">Ofrece protección extra a ralladuras, elimina los deslumbramientos, imágenes fantasmas  y los halos alrededor de los faros. Prevé la fatiga ocular, filtra el 99% de la luz haciendo la visión más nítida y contrastada, ya que sin el anti-reflejante se reducen en un 30%. Repele el polvo, líquidos, vaho, grasa y manchas.</p>'
			+'<p class="text-center">Por todas las ventajas que ofrece para mejorar tu calidad visual todos deberíamos de usar el tratamiento anti-reflejante.</p>'
			+'<p class="text-center">Actualmente en el mercado existen diferentes marcas de anti reflejantes las cuales manejan diferentes calidades y otras ni siquiera son el tratamiento que dicen, los anti reflejantes son tratamientos que se funden con el material de la lente, a diferencia de los corrientes que solo son un tinte que le ponen a la lente, esto produce que se caiga lo que comúnmente se ve como si se estuviera descarapelando además que no te protegen pueden producir confusión a la hora de detectar los colores y puede producirte problemas graves en tus ojos.</p>'
			$('.tratamientos-tgt').html(descr);
		});
		$( "#fotocromatico" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#antirreflejante" ).removeClass("tLentes-active");
			$( "#fotocromatico" ).addClass("tLentes-active");
			$( "#polarizado" ).removeClass("tLentes-active");
			var descr = 
			'<h1>FOTOCROMÁTICO</h1>'
			+'<p class="text-center">El tratamiento fotocromatico es creado de varios elementos que detectan la luz y se funden con el material de la lente, su principal función es regular la cantidad de luz necesaria que llega a la retina para formar así la imagen sin ninguna afectación por exceso o falta de luz. Esto reduce la fatiga ocular, y permite mayor tiempo de reacción, confort visual, y protección a todo momento. Además detecta y detiene la radiación UV.</p>'
			+'<p class="text-center"> Su principal característica es muy conocida por todos es la lente que en interiores se aclara y en exteriores se obscurece,  esto para regular la luz pues con falta de luz la pupila se hace grande y con el exceso de luz se hace pequeña.</p>'
			+'<p class="text-center">Es ideal para personas fotosensibles, con cataratas, con carnosidad en los ojos, personas que están todo el tiempo en la computadora, esto por el exceso de luz y aunque el tratamiento anti reflejan te proteja, el exceso de luz seguirá molestándote.</p>'
			+'<p class="text-center" style="font-style:italic;">Previenen cataratas, carnosidad en los ojos, cáncer en los ojos, fatiga ocular entre otros.</p>'
			$('.tratamientos-tgt').html(descr);
		});
		$( "#polarizado" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
			$( "#antirreflejante" ).removeClass("tLentes-active");
			$( "#fotocromatico" ).removeClass("tLentes-active");
			$( "#polarizado" ).addClass("tLentes-active");
			var descr = 
			'<h1>POLARIZADO</h1>'
			+'<p class="text-center">El tratamiento fotocromatico es creado de varios elementos que detectan la luz y se funden con el material de la lente, su principal función es regular la cantidad de luz necesaria que llega a la retina para formar así la imagen sin ninguna afectación por exceso o falta de luz. Esto reduce la fatiga ocular, y permite mayor tiempo de reacción, confort visual, y protección a todo momento. Además detecta y detiene la radiación UV.</p>'
			+'<h3 class="text-center">VENTAJAS</h3>'
			+'<ul class="text-center">'
			+'<li>Protección total frente a los rayos UV.</li>'
			+'<li>Visión sin reflejos.</li>'
			+'<li>Nitidez y contraste superiores.</li>'
			+'<li>Colores naturales (tecnología que no confunde el color).</li>'
			+'<li>Reducción de la fatiga ocular.</li>'
			+'<li>Adecuadas también para personas con alta sensibilidad a la luz.</li>'
			+'<li>Existen con y sin graduación, incluso lentes progresivas.</li>'
			+'<li>Ideales también para niños.</li>'
			+'<li>Existe en gris, verde y café.</li>'
			+'</ul>'
			$('.tratamientos-tgt').html(descr);
		});
		$('#antirreflejante').click();
	});
</script>
@endsection
