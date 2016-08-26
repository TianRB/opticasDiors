@extends('app')
@section('title')
Convenios
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
		<div class="row quienessomos-bg">
			<div class="white-body">
				<h1><i>Convenios</i></h1>
				<p>Conoce nuestros convenios, busca aqui.</p>
				<form>
					<input type="text" class="form-control form-group" id="convenio-input">
					<button type="submit" class="btn btn-default" id="convenio-submit">Buscar</button>
					<div id="convenios-existentes"></div>
				</form>
			</div>
		
		</div>

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