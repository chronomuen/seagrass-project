<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\HomeController;

use DB;

use Auth;

class Sightings extends Controller
{
    public function viewSightings(){
		$user = Auth::user();
		$id = $user->id;
		$locations = DB::select('select * from user_location where user_id='.$id.';',[1]);
		$infos = array();
		foreach($locations as $loc){
			$info = DB::select('select * from location where id='.$loc->location_id.';');
			array_push($infos,$info);
		}
		
		return view('view_report')->with(['infos'=> $infos]);
	}
}
