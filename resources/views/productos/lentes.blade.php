@extends('app')
@section('title')
Lentes
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	<div class="long-separator" style="margin:0;"></div>
</div>
@endsection
@section('script')
<script>
$( document ).ready(function() {

    $( "#preventNavigation" ).click(function( event ) {
 		//console.log( "Handler for .submit() called." );
 		event.preventDefault();
        event.stopPropagation();
        //$( "#miopia" ).addClass("saludvisual-active");
        //$( "#hipermetropia" ).removeClass("saludvisual-active");
        
	});
});
@endsection
