<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PH Seagrass Initiative') }}</title>
	<!-- Fonts -->
	<link href="{{{ asset('css/fonts-googleapis.css') }}}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
	<link href="{{{ asset('css/bootstrap.min.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/dashboard.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/navbar.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/registration.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/footer.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/main.css') }}}" rel="stylesheet">
	<link href="{{{ asset('css/carousel.css') }}}" rel="stylesheet">
    <!-- Scripts -->
	
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
		
    </script>
	<script>
		$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
		});
	</script>
	@if ( Request::is('/'))
		<style>
			.navbar-default .navbar-nav>li>a {
				color: #d1d1d1;
			}
		</style>
	@endif
</head>
<body>
    <div id="app">
		<nav class="navbar navbar-default" role="navigation" style="overflow:visible; {{ Request::is('/') ? 'background:rgba(0,0,0,0.25);' : '' }}">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>    
		  </div>
		  <div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li><a href="{{ url('/') }}">LOGO</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav">
					   <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
					   <li ><a href="#">About Seagrass</a></li>
					   <li ><a href="#">About Us</a></li>
                        @if (Auth::guest())
                            <li class="{{ Request::is('login')||Request::is('register') ? 'active' : '' }}">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Accounts <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/login') }}">Login</a></li>
									<li><a href="{{ url('/register') }}">Register</a></li>
                                </ul>
                            </li>						
                            <!--<li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
									@if (!(Request::is('dashboard*')))
										<li><a href="{{ url('/dashboard') }}">Dashboard</li>
									@endif
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
					</ul>
				</div>
			</ul>
		  </div>
		</nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
