@extends('app')
@section('title')
Admin-Promociones
@endsection
@section('content')
<div class="container-fluid catalog">
	@if(count($promocion) === 0)
		<p>No hay ninguna promocion!</p>
		<a href="promo/create"><button class="btn btn-default">Agregar una...</button></a>
	@else
		@foreach($promocion as $p)
			<div class="col-md-3 img-catalog-item">
				<div class="row">
				<div class="img-heading col-xs-8">{{ $p->title }}</div>
					<div class="col-xs-4 text-right no-padding">
						@if($p->valid != 0)
							<button class="btn btn-warning" id="desactivar-promo">
								<span class="glyphicon glyphicon-ban-circle" aria-hidden="true" aria-label="Desactivar"></span>
							</button>
						@else
							<button class="btn btn-default" id="activar-promo">
								<span class="glyphicon glyphicon-ok-circle" aria-hidden="true" aria-label="Activar"></span>
							</button>
						@endif
						{!! Form::open(array('url' => 'promo/' . $p->id, 'class' => 'pull-right')) !!}
							{!! Form::hidden('_method', 'DELETE') !!}
							{!! Form::submit('Eliminar', array('class' => 'btn btn-danger')) !!}
						{!! Form::close() !!}
						{{-- 
						<button class="btn btn-danger" id="eliminar-promo">
							<span class="glyphicon glyphicon-remove-circle" aria-hidden="true" aria-label="Eliminiar"></span>
						</button>
						--}}
					</div>
				</div>
				<img src="{{ $p->img }}" alt="Diors - {{ $p->title }}">
			</div>
		@endforeach
	@endif
</div>
@endsection
