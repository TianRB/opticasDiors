<footer class="container-fluid no-padding">
	<div class="social">
	<div class="admin">
		@if (!Auth::guest())
			<button class="btn btn-default admin"><a href="{{ url('/auth/login') }}">{{ Auth::user()->name }}</a></button>
		@endif
	</div>
		<a href="https://www.facebook.com/opticasdiorsoficial/"><img src="{{ asset('img/social/fb.png') }}" alt="facebook"></a>
	</div>
	<div class="spacer"></div>
</footer>