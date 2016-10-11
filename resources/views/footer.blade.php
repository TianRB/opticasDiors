<footer class="container-fluid no-padding">
	<div class="admin">
		@if (!Auth::guest())
			<a href="{{ url('/auth/login') }}"><button class="btn btn-default admin">{{ Auth::user()->name }}</button></a>
		@endif
	</div>
	<div class="social">
		<a href="https://www.facebook.com/opticasdiorsoficial/"><img src="{{ asset('img/social/fb.png') }}" alt="facebook"></a>
	</div>
	<div class="spacer"></div>
</footer>