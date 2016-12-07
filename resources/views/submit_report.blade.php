@extends('layouts.app')

@section('content')
    <head>
		<link href="{{{ asset('css/bootstrap-datetimepicker.css') }}}" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
		<script language="Javascript" type="text/javascript">
			// Wait for window load
			$(document).ready(function() {
			  $(window).keydown(function(event){
				if(event.keyCode == 13) {
				  event.preventDefault();
				  return false;
				}
			  });
			});
			$(window).on('load', function() {
				// Animate loader off screen
				$(".se-pre-con").fadeOut("slow");
			});
			
			window.onload = function() {
				$(".se-pre-con").fadeOut("slow");
			}
			$(document).ready(function(){
			   $('[data-toggle="offcanvas"]').click(function(){
				   $("#navigation").toggleClass("hidden-xs");
			   });
			});
		setInterval(function() { ObserveInputValue($('#input_id').val()); }, 100);


		</script>
		<script type="text/javascript">
								function initialize() {
										var address = (document.getElementById('pac-input'));
										var autocomplete = new google.maps.places.Autocomplete(address);
										autocomplete.setTypes(['geocode']);
										google.maps.event.addListener(autocomplete, 'place_changed', function() {
											var place = autocomplete.getPlace();
											if (!place.geometry) {
												return;
											}

										var address = '';
										if (place.address_components) {
											address = [
												(place.address_components[0] && place.address_components[0].short_name || ''),
												(place.address_components[1] && place.address_components[1].short_name || ''),
												(place.address_components[2] && place.address_components[2].short_name || '')
												].join(' ');
										}
									  });
								}
								function codeAddress() {
									geocoder = new google.maps.Geocoder();
									var address = document.getElementById("pac-input").value;
									geocoder.geocode( { 'address': address}, function(results, status) {
									  if (status == google.maps.GeocoderStatus.OK) {
									  $("#lat").val(''+results[0].geometry.location.lat());
									  $("#long").val(''+results[0].geometry.location.lng());
									  } 

									  else {
										$("#long").val('NULL');
										$("#lat").val('NULL');
									  }
									});
								  }
								google.maps.event.addDomListener(window, 'load', initialize);

        </script>


		<style>
			fieldset {
				border: 0;
			}
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
        </style>
    </head>
	
	<body class="home">
		<div class="se-pre-con"></div>
		
		<div class="container-fluid display-table">
			<div class="row display-table-row">
				@include('layouts.sidebar')
				<div class="col-md-10 col-sm-11 display-table-cell v-align" style="padding-top:75px;">
					<form id="myform" class="form-horizontal" action="/dashboard/add" method="POST">
					{{Form::open(array('url'=>'/dashboard/add','method'=>'post'))}}
					<fieldset>
					
					<!-- Form Name -->
					<legend style="font-weight:bold;">Report Seagrass Sighting</legend>
					<div class="form-group">
						<label class="col-md-4 control-label for="location">Location</label>
						<div class="col-md-4">

 
						    <input id="pac-input" class="controls" onchange="codeAddress()" type="text" placeholder="Search Box" required>
							<!--<button type="button" id="getCords" onClick="codeAddress();">Validate</button>-->
							<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD45bhdNZVJM-okT0zp5TU76ncSsaDHOfg&libraries=places&callback=initAutocomplete"
								 async defer></script>

							<div id="map" style="width:0px;"></div>
							<script>
							  // This example adds a search box to a map, using the Google Place Autocomplete
							  // feature. People can enter geographical searches. The search box will return a
							  // pick list containing a mix of places and predicted search terms.

							  // This example requires the Places library. Include the libraries=places
							  // parameter when you first load the API. For example:
							  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

							  function initAutocomplete() {
								var map = new google.maps.Map(document.getElementById('map'), {
								  center: {lat: -33.8688, lng: 151.2195},
								  zoom: 13,
								  mapTypeId: 'roadmap'
								});
								

								// Create the search box and link it to the UI element.
								var input = document.getElementById('pac-input');
								var searchBox = new google.maps.places.SearchBox(input);

								// Bias the SearchBox results towards current map's viewport.
								map.addListener('bounds_changed', function() {
								  searchBox.setBounds(map.getBounds());
								});

								var markers = [];
								// Listen for the event fired when the user selects a prediction and retrieve
								// more details for that place.
								searchBox.addListener('places_changed', function() {
								  var places = searchBox.getPlaces();

								  if (places.length == 0) {
									return;
								  }

								  // Clear out the old markers.
								  markers.forEach(function(marker) {
									marker.setMap(null);
								  });
								  markers = [];

								  // For each place, get the icon, name and location.
								  var bounds = new google.maps.LatLngBounds();
								  places.forEach(function(place) {
									if (!place.geometry) {
									  console.log("Returned place contains no geometry");
									  return;
									}
									var icon = {
									  url: place.icon,
									  size: new google.maps.Size(71, 71),
									  origin: new google.maps.Point(0, 0),
									  anchor: new google.maps.Point(17, 34),
									  scaledSize: new google.maps.Size(25, 25)
									};

									// Create a marker for each place.
									markers.push(new google.maps.Marker({
									  map: map,
									  icon: icon,
									  title: place.name,
									  position: place.geometry.location
									}));

									if (place.geometry.viewport) {
									  // Only geocodes have viewport.
									  bounds.union(place.geometry.viewport);
									} else {
									  bounds.extend(place.geometry.location);
									}
								  });
								  map.fitBounds(bounds);
								});
							  }

							</script>

						</div>
						
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label for="long">Longitude</label>
						<div class="col-md-4">
							<input id="long" name="long" class="form-control" size="16" type="text" readonly >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label for="lat">Latitude</label>
						<div class="col-md-4">
							<input id="lat" name="lat" class="form-control" size="16" type="text" readonly >
						</div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="date">Date of Sighting</label>  

						    <div id="datetimepicker" class="input-append date">							  
							  <div class="input-group date form_datetime col-md-5" data-date-format="mm/dd/yyyy H:ii p" data-link-field="dtp_input1">
								<input name="datePicker" id="datePicker" class="form-control" size="16" type="text" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
							  </div>
							</div>

					</div>
					
					<!-- Multiple radioes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="observation">Observation type</label>
					  <div class="col-md-4">
					  <div class="radio">
					  
						<label for="observation-0">
						  <input type="radio" name="obs[]" id="observation-0" value="Scuba Diving">
						  Scuba diving
						</label>
						</div>
					  <div class="radio">
						<label for="observation-1">
						  <input type="radio" name="obs[]" id="observation-1" value="Skin diving">
						  Skin diving
						</label>
						</div>
					  <div class="radio">
						<label for="observation-2">
						  <input type="radio" name="obs[]" id="observation-2" value="Snorkeling">
						  Snorkeling
						</label>
						</div>
					  <div class="radio">
						<label for="observation-3">
						  <input type="radio" name="obs[]" id="observation-3" value="On boat">
						  On boat
						</label>
						</div>
					  <div class="radio">
						<label for="observation-4">
						  <input type="radio" name="obs[]" id="observation-4" value="On field survey">
						  On field survey
						</label>
						</div>
					  <div class="radio">
						<label for="observation-5">
						  <input type="radio" name="obs[]" id="observation-5" value="During very low tide (seagrass exposed)">
						  During very low tide (seagrass exposed)
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input id="othersobs" type="radio" name="obs[]" value="0">							  
						  </span>
						  <input id="detailsobs" name="detailsobs"  class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>
					  </div>
					</div>



					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="depth">Depth of sighting (in meters)</label>  
					  <div class="col-md-4">
					  <input id="depth" name="depth" type="text" placeholder="0" class="form-control input-md" required>
					  <span class="help-block">e.g. 13</span>  
					  </div>
					</div>

					<!-- Multiple radioes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sediment">Sediment type</label>
					  <div class="col-md-4">
					  <div class="radio">
						<label for="sediment-0">
						  <input type="radio" name="sed[]" id="sediment-0" value="Sandy">
						  Sandy
						</label>
						</div>
					  <div class="radio">
						<label for="sediment-1">
						  <input type="radio" name="sed[]" id="sediment-1" value="Coarse sand, with bits of corals (coralline)">
						  Coarse sand, with bits of corals (coralline)
						</label>
						</div>
					  <div class="radio">
						<label for="sediment-2">
						  <input type="radio" name="sed[]" id="sediment-2" value="Muddy">
						  Muddy
						</label>
						</div>
					  </div>
					</div>

					<!-- Multiple radioes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="water">Water clarity</label>
					  <div class="col-md-4">
					  <div class="radio">
						<label for="water-0">
						  <input type="radio" name="clar[]" id="water-0" value="Clear">
						  Clear
						</label>
						</div>
					  <div class="radio">
						<label for="water-1">
						  <input type="radio" name="clar[]" id="water-1" value="Turbid">
						  Turbid
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input id="othersclar" type="radio" name="clar[]" value="0">     
						  </span>
						  <input id="detailsclar" name="detailsclar" class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>
						
					  </div>
					</div>



					<!-- Multiple Radios -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="species">Species (if you are familiar)</label>
					  <div class="col-md-4" style="font-style:italic;">
					  <div class="radio">
						<label for="species-0">
						  <input type="radio" name="spec[]" id="species-0" value="Enthalus acoroides">
						  Enthalus acoroides
						</label>
						</div>
					  <div class="radio">
						<label for="species-1">
						  <input type="radio" name="spec[]" id="species-1" value="Thalassia hemprichii">
						  Thalassia hemprichii
						</label>
						</div>
					  <div class="radio">
						<label for="species-2">
						  <input type="radio" name="spec[]" id="species-2" value="Cymodocea rotundata">
						  Cymodocea rotundata
						</label>
						</div>
					  <div class="radio">
						<label for="species-3">
						  <input type="radio" name="spec[]" id="species-3" value="Cymodocea serrulata">
						  Cymodocea serrulata
						</label>
						</div>
					  <div class="radio">
						<label for="species-4">
						  <input type="radio" name="spec[]" id="species-4" value="Halodule pinifolia">
						  Halodule pinifolia	
						</label>
						</div>
					  <div class="radio">
						<label for="species-5">
						  <input type="radio" name="spec[]" id="species-5" value="Halodule uninervis">
						  Halodule uninervis		  
						</label>
						</div>
					  <div class="radio">
						<label for="species-6">
						  <input type="radio" name="spec[]" id="species-6" value="Syringodium isoetifolium">
						  Syringodium isoetifolium
						</label>
						</div>
					  <div class="radio">
						<label for="species-7">
						  <input type="radio" name="spec[]" id="species-7" value="Halophilia sp.">
						  Halophilia sp.
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input id="othersspec" type="radio" name="spec[]" value="0">     
						  </span>
						  <input id="detailsspec" name="detailsspec" class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>						
					  </div>
					</div>

					<!--
					<div class="form-group">
					  <label class="col-md-4 control-label" for="upload">Upload photo</label>
					  <div class="col-md-4">
						<input id="upload" name="upload" class="input-file" type="file">
					  </div>
					</div>
					--> 
					<!-- Submit Button -->
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<input type="submit" name="sighting-submit" id="sighting-submit" tabindex="4" class="form-control btn btn-login" style="text-transform:capitalize;" value="Submit"> 
						</div>
					</div>
					
					</fieldset>
					{{Form::close()}}
					</form>

				</div>
			</div>

		</div>
		
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/jqBootstrapValidation.js') }}" charset="UTF-8"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/jquery-validate.bootstrap-tooltip.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
	$("#myform").validate({ 
		rules: { 
				"depth":{
					required: true,
					number: true
				},
				"long":{
					required: true,
					number: true
				},
				"lat":{
					required: true,
					number: true
				},
				"obs[]": { 
						required: true, 
						minlength: 1 
				},
				"sed[]": { 
						required: true, 
						minlength: 1 
				},
				"clar[]": { 
						required: true, 
						minlength: 1 
				},
				"spec[]": { 
						required: true, 
						minlength: 1 
				},
				"detailsobs": {
				  required: "#othersobs:checked"
				},
				"detailsclar": {
				  required: "#othersclar:checked"
				},
				"detailsspec": {
				  required: "#othersspec:checked"
				}
				
		}, 
		messages: { 
				"obs[]": "Please select at least one type of observation.",
				"sed[]": "Please select at least one type of sediment.",
				"clar[]": "Please select at least one type of water clarity.",
				"spec[]": "Please select at least one species."
		} 
	}); 
	/*document.getElementById("others2").addEventListener('change', function(){
    document.getElementById("details2").required = this.checked ;})
	document.getElementById("others1").addEventListener('change', function(){
    document.getElementById("details1").required = this.checked ;})

	document.getElementById("others3").addEventListener('change', function(){
    document.getElementById("details3").required = this.checked ;})*/
	
	function formatAMPM(date) {
	  var hours = date.getHours();
	  var minutes = date.getMinutes();
	  var ampm = hours >= 12 ? 'pm' : 'am';
	  hours = hours % 12;
	  hours = hours ? hours : 12; // the hour '0' should be '12'
	  minutes = minutes < 10 ? '0'+minutes : minutes;
	  var strTime = hours + ':' + minutes + ' ' + ampm;
	  return strTime;
	}
	$(document).ready( 
		function() {
			var now = new Date();
			var day = ("0" + now.getDate()).slice(-2);
			MyDateString = ('0' + (now.getMonth()+1)).slice(-2) + '/'
             +  ('0' + now.getDate()).slice(-2)+ '/'
             + now.getFullYear();
			var today = MyDateString+" "+formatAMPM(new Date());
		   $('#datePicker').val(today);
		}
		
	);
	$(document).ready(
		function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } 
	)
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
        showMeridian: 1,
		forceParse: 0,
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>




	</body>
@endsection
