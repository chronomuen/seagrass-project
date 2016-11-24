<!DOCTYPE html>
<html lang="en">
    <head>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script language="Javascript" type="text/javascript" src="{{ URL::asset('js/modernizr.js') }}"></script>
		<script language="Javascript" type="text/javascript">
			// Wait for window load
			
			$(window).on('load', function() {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
				$('.carousel').carousel();
			});
			
			window.onload = function() {
				
			}
		</script>
		<style>
		.fade-carousel .slides .slide-1 {
		 background-image: url('{{ asset('images/sample.jpg') }}');
		}
		.fade-carousel .slides .slide-2 {
		 background-image: url('{{ asset('images/sample.jpg') }}');
		}
		.fade-carousel .slides .slide-3 {
		 background-image: url('{{ asset('images/sample.jpg') }}');
		}
		</style>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SeagrassSpotter</title>

        <!-- Fonts -->
		<link href="{{{ asset('css/fonts-googleapis.css') }}}" rel="stylesheet" type="text/css">
		
        <!-- Styles -->

		<link href="{{{ asset('css/bootstrap.min.css') }}}" rel="stylesheet">
		<link href="{{{ asset('css/navbar.css') }}}" rel="stylesheet">
		<link href="{{{ asset('css/main.css') }}}" rel="stylesheet">
		<link href="{{{ asset('css/carousel.css') }}}" rel="stylesheet">
		<link href="{{{ asset('css/footer.css') }}}" rel="stylesheet">
		<style>

        </style>
    </head>
    <body>
		<div class="se-pre-con"></div>

		<div class="bannerContainer">
			@include('navbar')
			
			<div class="carousel fade-carousel carousel-fade slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
			  <!-- Overlay -->
			  <div class="overlay"></div>

			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#bs-carousel" data-slide-to="1"></li>
				<li data-target="#bs-carousel" data-slide-to="2"></li>
			  </ol>
			  
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item slides active">
				  <div class="slide-1" style=""></div>
				</div>
				<div class="item slides">
				  <div class="slide-2"></div>
				</div>
				<div class="item slides">
				  <div class="slide-3"></div>
				</div>
			  </div> 
			</div>
		</div>

		<div class="container">

			<div id="infoi">
				<div class="main-text hidden-xs">
					<div class="col-md-12 text-center">
						<h1>Static Headline And Content</h1>
						<h3>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</h3>
						<div class="">
							@if (Route::has('login'))
								@if (Auth::guest())
									<a class="btn btn-clear btn-sm btn-min-block" href="{{ url('/login') }}">Get started</a>
								@else
									<a class="btn btn-clear btn-sm btn-min-block" href="{{ url('/home') }}">Dashboard</a>
								@endif
							@endif
						</div>
					</div>
				</div>
			</div>

		</div>
		
		
		@include('footer')
    </body>

</html>
