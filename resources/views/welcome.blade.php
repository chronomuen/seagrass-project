@extends('layouts.app')

@section('content')
    <head>
		
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
		 background-image: url('{{ asset('images/carousel/1.png') }}');
		}
		.fade-carousel .slides .slide-2 {
		 background-image: url('{{ asset('images/carousel/2.png') }}');
		}
		.fade-carousel .slides .slide-3 {
		 background-image: url('{{ asset('images/carousel/3.png') }}');
		}
		</style>
        <title>SeagrassSpotter</title>

		<style>

        </style>
    </head>
    <body>
		<div class="se-pre-con"></div>

		<div class="bannerContainer">

			
			<div class="carousel fade-carousel carousel-fade slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
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
									<a class="btn btn-clear btn-sm btn-min-block" href="{{ url('/dashboard') }}">My Dashboard</a>
								@endif
							@endif
						</div>
					</div>
				</div>
			</div>

		</div>
		
		
		@include('footer')
    </body>
@endsection