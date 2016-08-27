@extends('app')
@section('title')
Quienes Somos
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nueva Promoción</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> Hubo un problema con tus datos.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('promo') }}" enctype="multipart/form-data">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Título</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" value="{{ old('title') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Imagen</label>
							<div class="col-md-6">
								<input type="file" class="form-control" name="img" value="{{ old('img') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Válida de inicio</label>
							<div class="col-md-1">
								<input type="checkbox" class="form-control" name="valid" value="{{ old('valid') }}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Guardar
								</button>
							</div>
						</div>
						
						{{--

						<div class="form-group">
							<label class="col-md-4 control-label">Contenido</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="content" value="{{ old('content') }}">
							</div>
						</div>

						--}}
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
