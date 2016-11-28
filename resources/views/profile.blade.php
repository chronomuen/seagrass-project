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
			$(document).ready(function(){
			   $('[data-toggle="offcanvas"]').click(function(){
				   $("#navigation").toggleClass("hidden-xs");
			   });
			});



		</script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SeagrassSpotter</title>

		<style>

        </style>
    </head>
	
	<body class="home">
		<div class="se-pre-con"></div>
		<div class="container-fluid display-table">
			<div class="row display-table-row">
				<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
					<div class="logo">
						<a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
							<img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
						</a>
					</div>
					<div class="navi">
						<ul>
							<li class="active"><a href="{{ url('/dashboard/profile') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
							<li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Map</span></a></li>
							<li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">All Sightings</span></a></li>
							<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Submit Sighting</span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-10 col-sm-11 display-table-cell v-align">
					<div class="user-dashboard" style="margin-top:60px;">
						<h1>Hello, {{ Auth::user()->name }}</h1>
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12 gutter">

								<div class="sales">
									<h2>Your Sale</h2>

									<div class="btn-group">
										<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span>Period:</span> Last Year
										</button>
										<div class="dropdown-menu">
											<a href="#">2012</a>
											<a href="#">2014</a>
											<a href="#">2015</a>
											<a href="#">2016</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12 gutter">

								<div class="sales report">
									<h2>Report</h2>
									<div class="btn-group">
										<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span>Period:</span> Last Year
										</button>
										<div class="dropdown-menu">
											<a href="#">2012</a>
											<a href="#">2014</a>
											<a href="#">2015</a>
											<a href="#">2016</a>
										</div>
									</div>
								</div>
							</div>
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
