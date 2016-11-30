				<div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
					<div class="logo">
						<a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
							<img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
						</a>
					</div>
					<div class="navi">
						<ul>
							<li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}"><a href="{{ url('/dashboard/profile') }}"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile</span></a></li>
							<li class="{{ Request::is('dashboard/map') ? 'active' : '' }}"><a href="{{ url('/dashboard/map') }}"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">View Map</span></a></li>
							<li class="{{ Request::is('dashboard/list') ? 'active' : '' }}"><a href="{{ url('/dashboard/list') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">All Sightings</span></a></li>
							<li class="{{ Request::is('dashboard/submit') ? 'active' : '' }}"><a href="{{ url('/dashboard/submit') }}"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Submit Sighting</span></a></li>
						</ul>
					</div>
				</div>