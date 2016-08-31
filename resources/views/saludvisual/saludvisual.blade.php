@extends('app')
@section('title')
Convenios
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
		<div class="long-separator"></div>
	</div>
	<div class="container-fluid salud-visual">
		<div class="col-xs-8 col-md-offset-2">
			<div class="row balham red errores-reflectivos-header text-center" style="font-weight: bold;">ERRORES REFLECTIVOS</div>
			<div class="row errores-reflectivos-img"><img src="img/saludvisual/errores_faticos.png" class="center-block" alt=""></div>
			<div class="balham text-center no-padding">
				<p>El término error refractivo se refiere a un trastorno en el que el ojo tiene una forma irregular que hace que la luz no se concentre en la zona correcta de la retina. Los errores refractivos ocasionan diversos grados de visión borrosa. Los tipos de errores refractivos son la miopía, la hipermetropía y el astigmatismo. Así como la presbicia (vista cansada).</p>
				<h2 class="text-center"><i>Causas</i></h2>
				<p class="text-center">Se desconoce la causa de los errores de refracción, aunque algunos médicos pueden deberse a:</p>
				<ul class="list-inline grey-border">
					<li>Factores Hereditarios</li>
					<li>Influencias Ambientales</li>
					<li>Factores Alimenticios</li>
				</ul>
				<div class="long-separator red-bg"></div>
				<div class="container-fluid saludvisual-descr-header">
					<div class="saludvisual-item col-md-3">
						<img src="img/saludvisual/miopia-1.png" alt="">
						<a href="" id="miopia"><h4>Miopía</h4></a>
					</div>
					<div class="saludvisual-item col-md-3">
						<img src="img/saludvisual/hipermetropia-1.png" alt="">
						<a href="" id="hipermetropia"><h4>Hipermetropía</h4></a>
					</div>
					<div class="saludvisual-item col-md-3">
						<img src="img/saludvisual/astig_tismo-1.png" alt="">
						<a href="" id="astigmatismo"><h4>Astigmatismo</h4></a>
					</div>
					<div class="saludvisual-item col-md-3">
						<img src="img/saludvisual/presbicia-1.png" alt="">
						<a href="" id="presbicia"><h4>Presbicia</h4></a>
					</div>
				</div>
				<div class="oval-separator"></div>
				<div class="saludvisual-tgt">
					
					

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
$( document ).ready(function() {

    $( "#miopia" ).click(function( event ) {
 		//console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
        $( "#miopia" ).addClass("saludvisual-active");
        $( "#hipermetropia" ).removeClass("saludvisual-active");
        $( "#astigmatismo" ).removeClass("saludvisual-active");
        $( "#presbicia" ).removeClass("saludvisual-active");
        var descr = 
        '<img src="img/saludvisual/miopia-2.png">'
        +'<div class ="oval-separator"></div>'
        +'<p>Un ojo miope puede ser más largo que un ojo normal o pude también tener un aumento en la curvatura de la córnea, los rayos de luz se enfocan delante de la retina, haciendo que la imagen este fuera de foco provocando que el objeto se vea borroso. Las personas miopes ven mal de lejos y bien de cerca, entre más miopía más cerca deben de estar del objeto para poder verlo bien. La miopía se corrige con una lente negativa en esfera.</p>'
        +'<h3>Sintomas</h3>'
        +'<div class ="oval-separator"></div>'
        +'<p>Algunos de sus síntomas son entrecerrar los ojos, incapacidad de distinguir los rasgos faciales de una persona a larga distancia, leer sólo con el libro muy cerca de la cara, sentarse en las primeras filas en la clase o en el cine, cansancio ocular e irritación en los ojos</p>'
        $('.saludvisual-tgt').html(descr);
	});
    $( "#hipermetropia" ).click(function( event ) {
 		//console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
        $( "#miopia" ).removeClass("saludvisual-active");
        $( "#hipermetropia" ).addClass("saludvisual-active");
        $( "#astigmatismo" ).removeClass("saludvisual-active");
        $( "#presbicia" ).removeClass("saludvisual-active");
        var descr = 
        '<img src="img/saludvisual/hipermetropia-2.png">'
        +'<div class ="oval-separator"></div>'
        +'<p>Un ojo hipermétrope es más pequeño de lo normal o la curvatura de la córnea es menos curva de lo normal o el poder de enfoque no es el correcto. Los rayos de luz no logran enfocarse sobre la retina se enfocan atrás provocando visión cercan borrosa y dificultan en enfocar objetos intermedios. La hipermetropía se corrige con una lente positiva en esfera.</p>'
        +'<h3>Sintomas</h3>'
        +'<div class ="oval-separator"></div>'        
        +'<p>La visión borrosa de objetos cercanos, dolor de cabeza a causa del esfuerzo ocular, fatiga ocular, dolor ocular.</p>'
        $('.saludvisual-tgt').html(descr);
	});
    $( "#astigmatismo" ).click(function( event ) {
 		//console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
        $( "#miopia" ).removeClass("saludvisual-active");
        $( "#hipermetropia" ).removeClass("saludvisual-active");
        $( "#astigmatismo" ).addClass("saludvisual-active");
        $( "#presbicia" ).removeClass("saludvisual-active");
        var descr = 
        '<div class="row" style="margin-top:20px;">'
        	+'<img src="img/saludvisual/Astigmatismo.png" class="col-md-5">'
        	+'<div class ="col-md-7">'
        		+'<p>El astigmatismo es un problema en la curvatura de la córnea, que impide el enfoque claro de los objetos cercanos y lejanos. Esto se debe a que la córnea, en vez de ser redonda, se achata por los polos y aparecen distintos radios de curvatura en cada uno de los ejes principales. Por ello, cuando la luz incide a través de la córnea, se obtienen imágenes poco nítidas y distorsionadas.</p>'
        		+'<h3><i>Tipos de Astigmatismo</i></h3>'
        		+'<div class ="oval-separator"></div>'
        		+'<div class="text-center">'
        			+'<span class="red times">ASTIGMATISMO SIMPLE</span><br>'
        			+'Aparece en un solo eje'
        			+'<div class ="oval-separator"></div>'
        			+'<span class="red times">ASTIGMATISMO COMPUESTO</span><br>'
        			+'A demás de que afecta un eje de asocia con la miopía y la hipermetropía'
        			+'<div class ="oval-separator"></div>'
        			+'<span class="red times">ASTIGMATISMO MIXTO</span><br>'
        			+'Cuando un eje se enfoca delante de la retina (miopía) y otro detrás de la retina (hipermetropia)'
        		+'</div>'
        	+'</div>'
        +'</div>'
        +'<div class ="oval-separator"></div>'
        +'<h3>Sintomas</h3>'        
        +'<p>El síntoma más habitual del astigmatismo es la visión distorsionada a cualquier distancia. Las personas con astigmatismo, experimentar frecuentes dolores de cabeza y mareo. Su corrección es con lentes cilíndricas a las que se le inducen un eje de 0 a 180 grados esto para corregir el problema de la curvatura</p>'
        +'<div class ="oval-separator"></div>'
        +'<p><i><b>Es muy importante un buen examen para determinar el eje exacto para la correccion del astigmatismo.</b></i></p>';
        $('.saludvisual-tgt').html(descr);
	});
    $( "#presbicia" ).click(function( event ) {
 		//console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
        $( "#miopia" ).removeClass("saludvisual-active");
        $( "#hipermetropia" ).removeClass("saludvisual-active");
        $( "#astigmatismo" ).removeClass("saludvisual-active");
        $( "#presbicia" ).addClass("saludvisual-active");
        var descr = 
        '<img src="img/saludvisual/presbicia-2.png">'
        +'<div class ="oval-separator"></div>'
        +'<p>La presbicia, un trastorno conocido comúnmente como "vista cansada", es la dificultad para ver de cerca. Los cambios producidos por la edad reducen el poder de acomodación de modo progresivo e irreversible.</p>'
		+'<p style="font-weight:bold;">Como consecuencia del envejecimiento se producen dos efectos:</p>'
		+'<p>El músculo ciliar pierde elasticidad y potencia, y el cristalino pierde elasticidad.</p>'
		+'Debido a esto, el ojo ve reducida su capacidad de acomodación y por tanto para ver de cerca. La pérdida de capacidad de acomodación no es repentina, sino que comienza en la juventud y se hace patente en torno a los 35 - 45, aumentando progresivamente.</p>'
        +'<h3>Sintomas</h3>'
        +'<div class ="oval-separator"></div>'
        +'<p>Dificultad para enfocar objetos cercanos, por lo tanto tiende​ ​a aumentar la distancia entre el objeto y los ojos, también necesidad de más luz para leer o realizar otras tareas similares.</p>'
        $('.saludvisual-tgt').html(descr);
	});
    $('#miopia').click();
});
</script>
@endsection