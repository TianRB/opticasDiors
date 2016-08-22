@extends('app')
@section('title')
Bienvenido
@endsection
@section('content')
<div class="container-fluid">
	<div class="row slogan">
		EXCELENCIA A LA VISTA
	</div>
	<div class="row">
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/carousel/Dior.jpg" alt="">
					<div class="carousel-caption">
						Dior
					</div>
				</div>
				<div class="item">
					<img src="img/carousel/HugoBoss.jpg" alt="">
					<div class="carousel-caption">
						Hugo Boss
					</div>
				</div>
				
			</div>

			<!-- Controls (remove hidden class to show)-->
			<a class="left carousel-control hidden" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control hidden" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</div>
</div>
@endsection
