@extends('app')
@section('title')
Servicios
@endsection
@section('content')
<div class="container-fluid no-padding">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	<div class="long-separator" style="margin:0;"></div>
	<div class="servicios-header text-center">SERVICIOS</div>
	<div class="servicios container col-md-10 col-md-offset-1 col-xs-12">

		<a href="#" class="preventNavigation" id="opticamovil">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/A-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="oftalmologia">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/F-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="seguridad">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/G-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="hospital">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/D-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="laboratorio">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/E-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="garantias">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/B-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="contactologia">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/C-2.png" alt="">
			</div>
		</a>
		<a href="#" class="preventNavigation" id="examen">
			<div class="col-xs-6 col-md-3 no-padding">
				<img src="img/servicios/H-2.png" alt="">
			</div>
		</a>

	</div>
</div>

<div class="overlay-s">
	<div>
		<img src="" alt="" class="">
		<p class=""></p>
	</div>
</div>

@endsection
@section('script')
<script>

	function createOverlay(img, body) {
		var imgPath = "img/servicios/";
		$( ".overlay-s > div > img" ).attr({
			src: imgPath+img
		});
		$( ".overlay-s > div > p" ).html(body);
		$( ".overlay-s" ).show('fast');
	}

	$( document ).ready(function() {
		$('#servicios').addClass('red');

		$( ".preventNavigation" ).click(function( event ) {
			event.preventDefault();
			event.stopPropagation();
		});
		$( ".overlay-s" ).click(function( event ) {
			$( ".overlay-s" ).hide(500);
		});


		$( "#examen" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/H-1.png'
			});
		});
		$( "#examen" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/H-2.png'
			});
		});
		$( "#examen" ).click(function( event ) {
			var img = 'H-3.jpg';
			var body = '<h1>EXAMEN DE LA VISTA</h1>'
			+'<p>Brindamos Exámenes completos y profesionales sin costo y sin compromiso de compra.</p>';
			createOverlay(img, body);
		});


		$( "#contactologia" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/C-1.png'
			});
		});
		$( "#contactologia" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/C-2.png'
			});
		});
		$( "#contactologia" ).click(function( event ) {
			var img = 'C-3.jpg';
			var body = '<h1>CONTACTOLOGÍA</h1>'
			+'<p>Contamos con contactologos calificados para la correcta adaptacion de las lentes de contacto especializadas.  Manejamos las marcas más reconocidas, trabajamos muy de cerca con laboratorios fabricantes para la creación de lentes de contacto personalizados.</p>'
			+'<p>En nuestrsas sucursales contamos con el personal altamente capacitado para la correcta adaptacion de las lentes de contacto.</p>'
			+'<p>Enseñamos la colocacion correcta de las lentes e contacto, asi como recomendaciones de uso y cuidad.</p>'
			+'<p style="margin:15px 0;font-style:italic;">Citas con el contactologo: Unicamente en la ciudad de Xalapa Veracruz.</p>'
			+'<p>Telefono:#todo# Hotario:#todo# </p>';
			createOverlay(img, body);
		});


		$( "#oftalmologia" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/F-1.png'
			});
		});
		$( "#oftalmologia" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/F-2.png'
			});
		});
		$( "#oftalmologia" ).click(function( event ) {
			var img = 'F-3.jpg';
			var body = '<h1>OFTALMÓLOGO</h1>'
			+'<p style="margin-bottom:15px;">Contamos con el servicio de medicos oftalmologos, especialistas en:</p>'
			+'<p>Cirugía de catarata.</p>'
			+'<p>Cirugia refractiva con laser.</p>'
			+'<p>Cirugia de pterigion (carnosidad).</p>'
			+'<p>Atencion especilizada a pacientes diabeticos.</p>'
			+'<p>Calculo de lente intraocular.</p>'
			+'<p>Infecciones oculares.</p>'
			+'<p>Consulta general para el cuidado preventivo del ojo.</p>'
			+'<p style="margin:15px 0;font-style:italic;">Citas: Unicamente en la ciudad de Xalapa Veracruz.</p>'
			+'<p>Telefono: 228 194 37 24         Horario: 9:00 a 20:00</p>';
			createOverlay(img, body);
		});

		$( "#hospital" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/D-1.png'
			});
		});
		$( "#hospital" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/D-2.png'
			});
		});
		$( "#hospital" ).click(function( event ) {
			var img = 'D-3.jpg';
			var body = '<h1>HOSPITAL DE ANTEOJOS</h1>'
			+'<p style="margin-bottom: 15px;">Algunos de los servicios que ofrecemos:</p>'
			+'<p>Cambio de tornillo.</p>'
			+'<p>Cambio de plaquetas.</p>'
			+'<p>Cambio de terminales.</p>'
			+'<p>Ajustes complicados.</p>'
			+'<p>Esterilización de armazones.</p>'
			+'<p>Tintes.</p>'
			+'<p>Soldaduras.</p>'
			+'<p>Cambio de hilo en ranuras.</p>'
			+'<p>Tinte en armazones.</p>'
			+'<p>Restauración de armazones antiguos.</p>';
			createOverlay(img, body);
		});


		$( "#laboratorio" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/E-1.png'
			});
		});
		$( "#laboratorio" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/E-2.png'
			});
		});
		$( "#laboratorio" ).click(function( event ) {
			var img = 'E-3.jpg';
			var body = '<h1>LABORATORIO ÓPTICO</h1>'
			+'<p>Contamos con un laboratorio óptico, donde se porcesan las lentes de todas nuestras sucursales, manejamos equipo con tecnologia de punta para garantizar el calculo correcto de la graduacion de nuestros pacientes, garanizando puntualidad, precision y  calidad de nuestros productos.</p>';
			createOverlay(img, body);
		});


		$( "#seguridad" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/G-1.png'
			});
		});
		$( "#seguridad" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/G-2.png'
			});
		});
		$( "#seguridad" ).click(function( event ) {
			var img = 'G-3.jpg';
			var body = '<h1>SEGURIDAD INDUSTRIAL</h1>'
			+'<p>Cumplimos con las normativas para la adaptación de anteojos a los trabajadores que laboran en áreas industriales. </p>'
			+'<p>ISO 8980-4.</p>'
			+'<p>ANSI Z80.3.</p>'
			+'<p>ANSI Z87.1.</p>'
			+'<p>CSA Z94.3-02.</p>'
			+'<p>AS 1067.</p>'
			+'<p>CE. </p>'
			+'<p>FDA.</p>'
			+'<p>Algunos puntos donde se aplican estas normativas.</p>'
			+'<p>Lentes: </p>'
			+'<p>Curvatura, espesor al centro, orillas y medidas de montaje. Resistencia a impactos, resistencia química, resistencia eléctrica y resistencia a descompresión.</p>'
			+'<p>Armazones:</p>'
			+'<p>Resistencia a impactos, medición precisa al montaje de la lente, relación espesor-armazón, relación curvatura-armazón y relación eje de polarización-armazón.</p>'
			+'<p>Tratamientos: </p>'
			+'<p>Aplicación en medios industriales, uso exterior e interior y aplicación en ambientes químicos.</p>'
			+'<p>Lente de contacto: </p>'
			+'<p>Durabilidad y comportamiento para uso en ambiente industrial.</p>';
			createOverlay(img, body);
		});


		$( "#garantias" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/B-1.png'
			});
		});
		$( "#garantias" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/B-2.png'
			});
		});
		$( "#garantias" ).click(function( event ) {
			var img = 'B-3.jpg';
			var body = '<h1>GARANTÍAS</h1>'
			+'<p style="margin-bottom:15px;">Nuestro principal objetivo es tu satisfacción, es por ello que ofrecemos garantías inigualables.</p>'
			+'<p style="margin-bottom:15px;">30 días de Garantía en satisfacción de graduación.</p>'
			+'<p style="margin-bottom:15px;">Aplica cuanto se realiza el examen en cualquiera de nuestras sucursales.</p>'
			+'<p style="margin-bottom:15px;">1 año en la lente por defectos de fabricación.</p>'
			+'<p style="margin-bottom:15px;">1 año en el tratamiento por defectos de fabricación.</p>'
			+'<p style="margin-bottom:15px;">6 meses en armazones de promoción, por defectos de fabricación.</p>'
			+'<p>1 año en armazones de línea por defectos de fabricación.</p>'
			+'<p>Todos nuestros productos cuentan con autenticidad ¡exígela!</p>'
			createOverlay(img, body);
		});


		$( "#opticamovil" ).mouseenter(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/A-1.png'
			});
		});
		$( "#opticamovil" ).mouseleave(function( event ) {
			$("img", this).attr({
				src: 'img/servicios/A-2.png'
			});
		});
		$( "#opticamovil" ).click(function( event ) {
			var img = 'A-3.jpg';
			var body = '<h1>ÓPTICA MÓVIL</h1>'
			+'<p>Contamos con servicio a domicilio con nuestra óptica móvil acondicionada con equipo de vanguardia y calidad, brindamos servicios de examen de la vista y revisión oftalmológica. Para la realización de los exámenes para la detención de los problemas visuales de sus trabajadores.</p>';
			createOverlay(img, body);
		});
	});
</script>
@endsection
