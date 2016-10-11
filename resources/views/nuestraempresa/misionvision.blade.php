@extends('app')
@section('title')
Quienes Somos
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>

		<div class="row misionvision-bg">
			<div class="visible-xs-block visible-sm-block alt-bg-xs"><img src="img/nosotros/bg-pareja.png" alt=""></div>
			<div class="white-body futura text-center">
				<h1><i>Misión</i></h1>
				<div class="long-line grey" style="margin-bottom:21px;"></div>
				<p>Brindar excelencia para la corrección <br class="hidden-xs">de los problemas visuales.</p>
				<h1 style="margin-top:1.5cm;"><i>Visión</i></h1>
				<div class="long-line grey" style="margin-bottom:21px;"></div>
				<p>La innovación constante, tecnología de última generación, calidad en nuestros productos, exclusividad en marcas y lo más importante el interés y la calidez en la atención al cliente.</p>
			</div>
		
		</div>

	</div>
</div>
@endsection
@section('script')
<script>
	$('#nuestraempresa').addClass('red');
</script>
@endsection