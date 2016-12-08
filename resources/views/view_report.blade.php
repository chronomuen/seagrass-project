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
			$(document).ready(function(){
				$('[data-toggle="popover"]').popover();   
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



						<h2>Here is a list of all reports</h2>
						<div class="list-group" style="width:75%;">
							@foreach($sightings as $info)
								
								<a href="#" class="list-group-item" title="<i>{{$info->type}}</i>" data-html="true" data-toggle="popover" 
								data-placement="right" data-content="Observation type: {{$info->observation}}<br/>
																	Depth: {{$info->depth}} m<br/>
																	Sediment type: {{$info->sediment}}<br/>
																	Water clarity: {{$info->clarity}}">
								  <h4 class="list-group-item-heading">{{$info->location}}</h4>
								  <p class="list-group-item-text">{{date('M j, Y',strtotime($info->date))}} {{date('g:i:s A',strtotime($info->time))}} by {{$info->name}}</p>
								  <p class="list-group-item-text"><i>{{$info->type}}</i></p>
								</a>


							@endforeach
						</div>
					
					</form>

				</div>
			</div>

		</div>





	</body>
@endsection
