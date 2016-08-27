@extends('app')
@section('title')
Admin-Promociones
@endsection
@section('content')
<div class="container-fluid catalog">
	@foreach($promocion as $p)
		<div class="col-md-3 img-catalog-item">
			<div class="row">
			<div class="img-heading col-xs-8">{{ $p->title }}</div>
				<div class="col-xs-4 text-right no-padding">
					<button class="btn btn-default">
						<span class="glyphicon glyphicon-ok-circle" aria-hidden="true" aria-label="Activate"></span>
					</button>
					<button class="btn btn-danger">
						<span class="glyphicon glyphicon-remove-circle" aria-hidden="true" aria-label="Eliminate"></span>
					</button>
				</div>
			</div>
			<img src="{{ $p->img }}" alt="Diors - {{ $p->title }}">
		</div>
	@endforeach
</div>
@endsection
