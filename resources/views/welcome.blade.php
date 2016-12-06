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

		ul li a.disabled:hover,
		ul li a.disabled:focus{
			color: #fff ! important;
		}
		.fade-carousel .slides .slide-1 {
		 background-image: url('{{ asset('images/carousel/1.png') }}');
		}
		.fade-carousel .slides .slide-2 {
		 background-image: url('{{ asset('images/carousel/2.png') }}');
		}
		.fade-carousel .slides .slide-3 {
		 background-image: url('{{ asset('images/carousel/3.png') }}');
		}
		body{
			
			background-image: url('{{ asset('images/bg.jpg') }}');
			background-repeat: no-repeat;
			background-attachment: fixed;
			z-index: -2;
		}

		#dot-matrix {
			background:linear-gradient(
			  rgba(0, 0, 0, 0.45), 
			  rgba(0, 0, 0, 0.45)
			), url('{{ asset('images/overlay.png') }}');
			height: 100%;
			width: 100%;
			position: fixed;
			top: 0;
			z-index: -1
		}
		</style>
    </head>
    <body>
		<div class="se-pre-con">
		</div>
		<div id="dot-matrix"></div>
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

			<div id="infoi" >
				<div class="main-text hidden-xs" >
					<div class="col-md-12 text-center">
						<h1 style="text-shadow: 0 1px 2px rgba(0, 0, 0, .6);">Support seagrass conservation</h1>
						<h5 style="text-shadow: 0 1px 2px rgba(0, 0, 0, .6);">
							Help us track seagrass location in the Philippines.
						</h5>
						<div class="arial">
							@if (Route::has('login'))
								@if (Auth::guest())
									<p><a class="btn btn-lg btn-primary" href="{{ url('/login') }}" role="button">Get started</a></p>
									
								@else
									<p><a class="btn btn-lg btn-primary" href="{{ url('/dashboard') }}" role="button">My Dashboard</a></p>

								@endif
							@endif
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- First Grid -->
		<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
		  <div class="w3-content">
			<div class="w3-third w3-center">
			  <i class="fa fa-lightbulb-o w3-padding-64 w3-text-green w3-margin-right" style="font-size:150px;"></i>
			</div>

			<div class="w3-twothird">
			  <h1>Our initiative.</h1>
			  <h5 class="w3-padding-32">This citizen science project on local seagrass spotting is an initiative of some marine science researchers to promote the awareness of seagrass habitats and their conservation.  It aims to involve citizens of all ages and from various sectors to help in the mapping of our seagrass beds by reporting  seagrass sightings.</h5>

			  <p class="w3-text-grey">As of the latest count in 2016, the Philippine archipelago has a total of 7,641 islands, With such a great number, our marine researchers will take decades to track the extent of seagrass beds in the country!</p>
			</div>
		  </div>
		</div>
		<br>
		<br>
		<br>
		<!-- Second Grid -->
		<div class="w3-row-padding w3-blue-grey w3-padding-64 w3-container">
		  <div class="w3-content">
			<div class="w3-twothird">
			  <h1>Get involved!</h1>
			  <h5 class="w3-padding-32"> <b>Who can get involved?</b>  We are asking the help of the youth, school clubs, divers, resort owners, coastal area visitors, community organizations, government employees, NGOs, and researchers.  We are counting on everyone who want to be pro-active in seagrass conservation.</h5>

			  <p class="w3-text-white"><b>How can you get involved?</b> It’s easy! Just sign up in this website and you will be able to access your own dashboard. Your dashboard allows you to submit your sightings through a form.</p>
			</div>

			<div class="w3-third w3-center">
			  <i class="fa fa-users w3-padding-64 w3-text-light-blue" style="font-size:150px;"></i>
			</div>
		  </div>
		</div>
		<br>
		<br>
		<br>
		<!-- Third Grid -->
		<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
		  <div class="w3-content">
			<div class="w3-third w3-center">
			  <i class="fa fa-globe w3-padding-64 w3-text-green w3-margin-right" style="font-size:150px;"></i>
			</div>

			<div class="w3-twothird">
			  <h1>Conserve.</h1>
			  <h5 class="w3-padding-32"><b>Why should you get involved?</b>  Because we need to conserve these important habitats which serve as the feeding ground of young fish, dugong, marine turtles, and a myriad of invertebrates.  They also help protect our shores. These ecosystems are being lost  due to pollution and destructive human activities including land reclamation and tree-planting over seagrass.  </h5>

			</div>
		  </div>
		</div>
		
		
		@include('footer')
    </body>
@endsection