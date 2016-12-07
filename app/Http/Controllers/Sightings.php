<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\HomeController;

use DB;

use Redirect;

use Auth;

class Sightings extends Controller
{
    public function viewSightings(){
		$sightings = DB::select('select * from reports order by created_at desc;',[1]);
		
		return view('view_report')->with(['sightings'=> $sightings]);
	}
	
	public function create(){
		$date = date_create($_POST['datePicker']);
		$observation = $_POST['obs'][0];
		if ($observation == '0'){
			$observation = $_POST['detailsobs'];
		}
		$depth = $_POST['depth'];
		$sediment = $_POST['sed'][0];
		$clarity = $_POST['clar'][0];
		if ($clarity == '0'){
			$clarity = $_POST['detailsclar'];
		}
		$type = $_POST['spec'][0];
		if ($type == "0"){
			$type = $_POST['detailsspec'];
		}
		
		$reports = array(
			['date' => $date->format('Y-m-d'), 'time' => $date->format('H:i:s'), 'observation' => $observation, 'depth' => $depth, 'sediment' => $sediment, 'clarity' => $clarity, 'type' => $type]
		);
		
		DB::table('reports')->insert($reports);
		
		echo '<alert>Succesfully added sighting</alert>';
		
		return Redirect::back();
	}
}
