@extends('layouts.app')

@section('content')
    <head>
		<script language="Javascript" type="text/javascript">
			// Wait for window load
			$(window).on('load', function() {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
			});
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
				<div class="col-md-10 col-sm-11 display-table-cell v-align">
					<div class="user-dashboard" style="margin-top:60px;">
						<h1>Hello, {{ Auth::user()->name }}</h1>
						<!-- Trigger the modal with a button -->
						<h2>Here are your submitted reports</h2>
						<div class="list-group" style="width:75%;">
							@foreach($infos as $info)
								
								<a href="#" class="list-group-item" title="<i>{{$info->type}}</i>" data-html="true" data-toggle="popover" 
								data-placement="right" data-content="Observation type: {{$info->observation}}<br/>
																	Depth: {{$info->depth}} m<br/>
																	Sediment type: {{$info->sediment}}<br/>
																	Water clarity: {{$info->clarity}}">
								  <h4 class="list-group-item-heading">{{$info->location}}</h4>
								  <p class="list-group-item-text">{{date('M j, Y',strtotime($info->date))}} {{date('g:i:s A',strtotime($info->time))}}</p>
								  <p class="list-group-item-text"><i>{{$info->type}}</i></p>
								</a>


							@endforeach
						</div>
					</div>
				</div>
			</div>

		</div>



		<!-- Modal -->
		<div id="add_project" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header login-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Add Project</h4>
					</div>
					<div class="modal-body">
								<input type="text" placeholder="Project Title" name="name">
								<input type="text" placeholder="Post of Post" name="mail">
								<input type="text" placeholder="Author" name="passsword">
								<textarea placeholder="Desicrption"></textarea>
						</div>
					<div class="modal-footer">
						<button type="button" class="cancel" data-dismiss="modal">Close</button>
						<button type="button" class="add-project" data-dismiss="modal">Save</button>
					</div>
				</div>

			</div>
		</div>

	</body>
@endsection
