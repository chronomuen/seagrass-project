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
		$sightings = DB::select('select * from reports join users on reports.user_id=users.id order by reports.date,reports.time desc;',[1]);
		
		return view('view_report')->with(['sightings'=> $sightings]);
	}
	
	public function create(){
		$user = Auth::user();
		$id = $user->id;
		$name = $_POST['place'];
		$long = $_POST['long'];
		$lat = $_POST['lat'];
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
			['user_id'=>$id, 'location' => $name, 'longitude' => $long, 'latitude' => $lat, 'date' => $date->format('Y-m-d'), 'time' => $date->format('H:i:s'), 'observation' => $observation, 'depth' => $depth, 'sediment' => $sediment, 'clarity' => $clarity, 'type' => $type]
		);
		
		DB::table('reports')->insert($reports);
		$report_id = DB::select('select max(id) as id from reports');
		$array = array(
			['user_id' => $id, 'report_id' => $report_id[0]->id]
		);
		
		DB::table('user_report')->insert($array);
		
		echo '<alert>Succesfully added sighting</alert>';
		
		return Redirect::back();
	}
}
