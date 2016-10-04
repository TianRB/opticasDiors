@extends('app')
@section('title')
Convenios
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	<div class="container promo-header text-center no-padding">
		<div class="long-line grey"></div>
			<ul class="promo-header-body list-inline">
				<li><span class="convenios-header">CONVENIOS</span></li>
			</ul>
		<div class="long-line grey"></div>
	</div>
	
	<div class="convenios-body col-md-6 col-md-offset-3 futura">
		<p>Ofrecemos a empresas e instituciones (privadas y guburnamentales) diversos beneficios para sus trabajadores</p>
		<p>Visitamos su empresa con nuestra Óptica Móvil.</p>
		<ul style="margin-left:30px;padding-left:10px;">
			<li>Exámenes de la vista</li>
			<li>Revisión oftalmológica</li>
			<li>Precios exclusivos por compras de mayoreo</li>
			<li>Amplio surtido en armazones con precios especiales</li>
		</ul>
		<p>Descuentos especiales para sus trabajadores y familiares.</p>
		<p>Capacitación en el cuidado de la visión</p>
		<p>Descuentos especiales en el área oftalmológica</p>
		<p>Convenios actuales: <input type="text" class="convenio-text-field" id="convenio-submit"></p>
		<div class="results"></div>
		<p>Si requiere más información o contratación, contáctanos y con gusto te atenderemos.</p>

	</div>
</div>
@endsection
@section('script')
<script>
$( document ).ready(function() {
	$('#convenios').addClass('red');

var convenios = [
	'DIF ESTATAL DE VERACRUZ ',
	'CRUZ ROJA',
	'UNIVERSIDAD VERACRUZANA',
	'CFE (Transmisión Xalapa)',
	'CFE (Encanto)',
	'CFE (Transmisión Poza Rica)',
	'CFE (Termoeléctrica Poza Rica)',
	'CFE (Distribución Poza Rica)',
	'CFE (Laguna Verde)',
	'Instituto Veracruzano de la Vivienda',
	'PODER JUDICIAL DE LA FEDERACIÓN',
	'MUNICIPIO DE XALAPA',
	'COLDER',
	'IVES UNIVERSIDAD',
	'UX UNIVERSIDAD',
	'GOBIERNO DEL ESTADO DE VERACRUZ :',
	'SECRETARIA DE FINANZAS Y PLANEACIÓN ',
	'SECRETARÍA DE SEGURIDAD PÚBLICA ',
	'SECRETARÍA DE DESARROLLO AGROPECUARIO RURAL Y PESCA',
	'SECRETARÍA DE INFRAESTRUCTURA Y OBRA PÚBLICA ',
	'SECRETARÍA DE GOBIERNO ',
	'SECRETARÍA DE DESARROLLO ECONÓMICO Y PORTUARIO ',
	'SECRETARÍA DE TRABAJO PREVENCIÓN SOCIAL Y PRODUCTIVIDAD',
	'SECRETARÍA DE MEDIO AMBIENTE ',
	'SECRETARÍA DE TURISMO Y CULTURA DEL ESTADO ',
	'SECRETARÍA DE DESARROLLO SOCIAL',
	'PROTECCIÓN CIVIL',
	'CONTRALORÍA GENERAL ',
	'FISCALÍA GENERAL DEL ESTADO  (ANTES PROCURADURÍA)',
	'OFICINA DEL PROGRAMA DE GOBIERNO ',
	'COMUNICACIÓN SOCIAL',
	'DIF. DESARROLLO INTEGRAL PARA LA FAMILIA',
	'INECOL',
	'CMIC CAMARA MEXICANA DE LA INSDRUSTRIA DE LA CONSTRUCCIÓN ',
	'IPAX',
	'SEDESOL GOBIERNO FEDERAL'
];

    $( "#convenio-submit" ).keydown(function( event ) {
 		var resultados = $.grep(convenios, function(valor, i){
 			return valor.toLowerCase().indexOf($('#convenio-submit').val().toLowerCase()) != -1;
 		});
		//console.log(resultados);
		if ($('#convenio-submit').val() != '') {// Evita que el campo vacío regrese todos los elementos del arreglo
			$('.results').html(resultados.slice(0,9).join("<br>"));
		} else {
			$('.results').html('');
		}
	});
});
</script>
@endsection