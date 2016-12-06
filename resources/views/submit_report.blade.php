@extends('layouts.app')

@section('content')
    <head>
		<link href="{{{ asset('css/bootstrap-datetimepicker.css') }}}" rel="stylesheet" media="screen">
		<script language="Javascript" type="text/javascript">
			// Wait for window load
			
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



		</script>


		<style>
			fieldset {
				border: 0;
			}
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
					<legend style="font-weight:bold;">Report Seagrass Sighting</legend>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="date">Date of Sighting</label>  

						    <div id="datetimepicker" class="input-append date">							  
							  <div class="input-group date form_datetime col-md-5" data-date-format="MM dd yyyy HH:ii p" data-link-field="dtp_input1">
								<input class="form-control" size="16" type="text" value="" readonly>
								<span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
							  </div>
							</div>

					</div>


					<!-- Multiple Checkboxes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="observation">Observation type</label>
					  <div class="col-md-4">
					  <div class="checkbox">
						<label for="observation-0">
						  <input type="checkbox" name="observation" id="observation-0" value="1">
						  Scuba diving
						</label>
						</div>
					  <div class="checkbox">
						<label for="observation-1">
						  <input type="checkbox" name="observation" id="observation-1" value="2">
						  Skin diving
						</label>
						</div>
					  <div class="checkbox">
						<label for="observation-2">
						  <input type="checkbox" name="observation" id="observation-2" value="3">
						  Snorkeling
						</label>
						</div>
					  <div class="checkbox">
						<label for="observation-3">
						  <input type="checkbox" name="observation" id="observation-3" value="4">
						  On boat
						</label>
						</div>
					  <div class="checkbox">
						<label for="observation-4">
						  <input type="checkbox" name="observation" id="observation-4" value="5">
						  On field survey
						</label>
						</div>
					  <div class="checkbox">
						<label for="observation-5">
						  <input type="checkbox" name="observation" id="observation-5" value="6">
						  During very low tide (seagrass exposed)
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input type="checkbox">     
						  </span>
						  <input id="others" name="others" class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>
					  </div>
					</div>



					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="depth">Depth of sighting (in meters)</label>  
					  <div class="col-md-4">
					  <input id="depth" name="depth" type="text" placeholder="0" class="form-control input-md" required="">
					  <span class="help-block">e.g. 13</span>  
					  </div>
					</div>

					<!-- Multiple Checkboxes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sediment">Sediment type</label>
					  <div class="col-md-4">
					  <div class="checkbox">
						<label for="sediment-0">
						  <input type="checkbox" name="sediment" id="sediment-0" value="1">
						  Sandy
						</label>
						</div>
					  <div class="checkbox">
						<label for="sediment-1">
						  <input type="checkbox" name="sediment" id="sediment-1" value="2">
						  Coarse sand, with bits of corals (coralline)
						</label>
						</div>
					  <div class="checkbox">
						<label for="sediment-2">
						  <input type="checkbox" name="sediment" id="sediment-2" value="3">
						  Muddy
						</label>
						</div>
					  </div>
					</div>

					<!-- Multiple Checkboxes -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="water">Water clarity</label>
					  <div class="col-md-4">
					  <div class="checkbox">
						<label for="water-0">
						  <input type="checkbox" name="water" id="water-0" value="1">
						  Clear
						</label>
						</div>
					  <div class="checkbox">
						<label for="water-1">
						  <input type="checkbox" name="water" id="water-1" value="2">
						  Turbid
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input type="checkbox">     
						  </span>
						  <input id="others" name="others" class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>
					  </div>
					</div>



					<!-- Multiple Radios -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="species">Species (if you are familiar)</label>
					  <div class="col-md-4" style="font-style:italic;">
					  <div class="checkbox">
						<label for="species-0">
						  <input type="checkbox" name="species" id="species-0" value="1">
						  Enthalus acoroides
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-1">
						  <input type="checkbox" name="species" id="species-1" value="2">
						  Thalassia hemprichii
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-2">
						  <input type="checkbox" name="species" id="species-2" value="3">
						  Cymodocea rotundata
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-3">
						  <input type="checkbox" name="species" id="species-3" value="4">
						  Cymodocea serrulata
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-4">
						  <input type="checkbox" name="species" id="species-4" value="5">
						  Halodule uninervis
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-5">
						  <input type="checkbox" name="species" id="species-5" value="6">
						  Syringodium isoetifolium
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-6">
						  <input type="checkbox" name="species" id="species-6" value="7">
						  Halodule pinifolia
						</label>
						</div>
					  <div class="checkbox">
						<label for="species-7">
						  <input type="checkbox" name="species" id="species-7" value="8">
						  Halophilia sp.
						</label>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">     
							  <input type="checkbox">     
						  </span>
						  <input id="others" name="others" class="form-control" type="text" placeholder="Others">
						</div>
						<p class="help-block">Please specify</p>						
					  </div>
					</div>


					<!-- File Button --> 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="upload">Upload photo</label>
					  <div class="col-md-4">
						<input id="upload" name="upload" class="input-file" type="file">
					  </div>
					</div>
					<!-- Submit Button -->
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<input type="submit" name="sighting-submit" id="sighting-submit" tabindex="4" class="form-control btn btn-login" style="text-transform:capitalize;" value="Submit">
						</div>
					</div>
					
					</fieldset>
					</form>

				</div>
			</div>

		</div>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
<script type="text/javascript">
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
