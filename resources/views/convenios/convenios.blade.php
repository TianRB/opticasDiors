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
	
	<div class="convenios-body col-md-6 col-md-offset-3 balham">
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
		<p>Convenios actuales: <input type="text" class="convenio-text-field"></p>
		<p>Si requiere más información o contratación, contáctanos y con gusto te atenderemos.</p>

	</div>
</div>
@endsection
@section('script')
<script>
$( document ).ready(function() {
    $( "#convenio-submit" ).click(function( event ) {
 		console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
	});
});
</script>
@endsection