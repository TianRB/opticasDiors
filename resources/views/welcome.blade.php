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

			<!-- Indicators (remove hidden class to show) -->
			<ol class="carousel-indicators hidden">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				<li data-target="#carousel-example-generic" data-slide-to="6"></li>
				<li data-target="#carousel-example-generic" data-slide-to="7"></li>
				<li data-target="#carousel-example-generic" data-slide-to="8"></li>
				<li data-target="#carousel-example-generic" data-slide-to="9"></li>
				<li data-target="#carousel-example-generic" data-slide-to="10"></li>
				<li data-target="#carousel-example-generic" data-slide-to="11"></li>
				<li data-target="#carousel-example-generic" data-slide-to="12"></li>
			</ol>

			<!-- Wrapper for slides -->

			<div class="carousel-inner" role="listbox">

				<!-- g1 -->
				<div class="item active">
					<img src="img/carousel/monofocal.jpg" alt="">
					<div class="carousel-caption">
						Monofocales
					</div>
				</div>

				<div class="item">
					<img src="img/carousel/diors.jpg" alt="">
					<div class="carousel-caption">
						Dior
					</div>
				</div>

				<div class="item">
					<img src="img/carousel/nike.jpg" alt="">
					<div class="carousel-caption">
						NIKE
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/calvinklein.jpg" alt="">
					<div class="carousel-caption">
						Calvin Klein
					</div>
				</div>
				
				<!-- g2 -->
				<div class="item">
					<img src="img/carousel/bifocal.jpg" alt="">
					<div class="carousel-caption">
						Bifocales
					</div>
				</div>

				<div class="item">
					<img src="img/carousel/carrera.jpg" alt="">
					<div class="carousel-caption">
						CARRERA
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/cloe.jpg" alt="">
					<div class="carousel-caption">
						cloe
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/dkny.jpg" alt="">
					<div class="carousel-caption">
						DKNY
					</div>
				</div>
				
				<!-- g3 -->
				<div class="item">
					<img src="img/carousel/antirreflejante.jpg" alt="">
					<div class="carousel-caption">
						Antirreflejantes
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/dyg.jpg" alt="">
					<div class="carousel-caption">
						D&G
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/hugoboss.jpg" alt="">
					<div class="carousel-caption">
						HUGO BOSS
					</div>
				</div>
				
				<div class="item">
					<img src="img/carousel/robertocavalli.jpg" alt="">
					<div class="carousel-caption">
						Roberto Cavalli
					</div>
				</div>
				
				<!-- g4 -->
				<div class="item">
					<img src="img/carousel/progresivo.jpg" alt="">
					<div class="carousel-caption">
						Progresivos
					</div>
				</div>

				<div class="item">
					<img src="img/carousel/tomford.jpg" alt="">
					<div class="carousel-caption">
						Tom Ford
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
