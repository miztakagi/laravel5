
@section('nav')
<nav class="navbar navbar-default">
	<div class="container-fluid w100p">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="{{asset('/images/common/nonovel_logo_120.png')}}" alt="ののべる.jp ロゴ" width="" height="82" /></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('top') }}">TOP</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
					<li><a href="{{ url('/auth/register') }}">Register</a></li>
				@else
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
<div class="nav-search">
	<p class="control has-addons">
		<input class="input" type="text" placeholder="Find a post">
		<button class="button glyphicon-search">
			&nbsp;
		</button>
	</p>
</div>
@endsection
