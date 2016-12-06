@extends('layouts.app')

@section('content')
    <head>
		<script language="Javascript" type="text/javascript">
			// Wait for window load
			
			$(window).on('load', function() {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
			});
			
			window.onload = function() {
				
			}
			$(document).ready(function(){
			   $('[data-toggle="offcanvas"]').click(function(){
				   $("#navigation").toggleClass("hidden-xs");
			   });
			});



		</script>


		<style>

        </style>
    </head>
	
	<body class="home">
		<div class="se-pre-con"></div>
		<div class="container-fluid display-table">
			<div class="row display-table-row">
				@include('layouts.sidebar')
				<div class="col-md-10 col-sm-11 display-table-cell v-align" style="padding-top:75px;">
					<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>All Sightings</legend>

					<?php use App\Http\Controllers\Sightings;
					echo Sightings::viewSightings(); ?>
					

					</fieldset>
					</form>

				</div>
			</div>

		</div>





	</body>
@endsection
