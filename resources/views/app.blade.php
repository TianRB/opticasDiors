<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diors | @yield('title')</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/fonts.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/nav-alt.css') }}" rel="stylesheet">
	@yield('style')
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<center>@include('nav-alt')</center>
	@yield('content')

	@include('footer')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@yield('script')
	<script>
		// Dos funciones que hacen que los dropdowns se alinien a la izquierda
		var offset1 = $('#nuestraempresa').offset();
		$('#dropdown-menu-nuestraempresa').offset({left: offset1.left*(-1)});

		var offset2 = $('#productos').offset();
		$('#dropdown-menu-productos').offset({left: offset2.left*(-1)});
 // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
  $('.dropdown').on('show.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
  });

  // ADD SLIDEUP ANIMATION TO DROPDOWN //
  $('.dropdown').on('hide.bs.dropdown', function(e){
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
  });
	</script>
</body>
</html>
