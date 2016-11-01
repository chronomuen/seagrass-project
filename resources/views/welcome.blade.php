<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SeagrassSpotter</title>

        <!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->

		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{{ asset('css/sample.css') }}}" rel="stylesheet">

		<style>

        </style>
    </head>
    <body>
		<div class="container-fluid" style="position:relative;">
				<!-- Second navbar for sign in -->
			<nav class="navbar navbar-fixed-top" style="position:absolute;z-index:10;">
			  <div class="container" >
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#" style="color:#fff;">Brand</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-collapse-2">
				  <ul class="nav navbar-nav navbar-right" >
					<li><a href="#">About Us</a></li>
					<li><a href="#">Our Work</a></li>
					<li><a href="#">All About Seagrass</a></li>
					<li><a href="#">Submit Report</a></li>
					<li><a href="#">Contact Us</a></li>
					<li>
					  <a class="btn btn-default btn-outline btn-circle collapsed"  data-toggle="collapse" href="#nav-collapse2" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
					</li>
				  </ul>
				  <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse2">
					<form class="navbar-form navbar-right form-inline" role="form">
					  <div class="form-group">
						<label class="sr-only" for="Email">Email</label>
						<input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
					  </div>
					  <div class="form-group">
						<label class="sr-only" for="Password">Password</label>
						<input type="password" class="form-control" id="Password" placeholder="Password" required />
					  </div>
					  <button type="submit" class="btn btn-success">Sign in</button>
					</form>
				  </div>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container -->
			</nav><!-- /.navbar -->
		</div>
		<!-- Full Page Image Background Carousel Header -->
		<header id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<div class="item active">
					<!-- Set the first background image using inline CSS below. -->
					<div class="fill" style="background-image:url('{{ asset('img/seagrass.jpg') }}');"></div>
					<div class="carousel-caption">
						<h3>First slide</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="item">
					<!-- Set the second background image using inline CSS below. -->
					<div class="fill" style="background-image:url('{{ asset('img/seagrass.jpg') }}');"></div>
					<div class="carousel-caption">
						<h3>Second slide</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
				<div class="item">
					<!-- Set the third background image using inline CSS below. -->
					<div class="fill" style="background-image:url('{{ asset('img/seagrass.jpg') }}');"></div>
					<div class="carousel-caption">
						<h3>Third slide</h3>
						<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
					</div>
				</div>
			</div>
            <div class="main-text hidden-xs">
                <div class="col-md-12 text-center">
                    <h1>
                        Static Headline And Content</h1>
                    <h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </h3>
                    <div class="">
                        <a class="btn btn-clear btn-sm btn-min-block" href="http://www.jquery2dotnet.com/">Get Started</a>
					</div>
                </div>
            </div>		

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
    </body>
</html>
