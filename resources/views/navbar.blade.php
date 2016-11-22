		<nav class="navbar navbar-default" role="navigation">
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
					   
					   <li class="active"><a href="{{ url('/') }}">Home</a></li>
					   <li><a href="#">About</a></li>
					   <li><a href="#">Services</a></li>
					   <li><a href="#">Products</a></li>
					   <li><a href="#">Contacts</a></li>
					   <li><a href="#">Blog</a></li>
					</ul>
				</div>
			</ul>
		  </div>
		</nav>
