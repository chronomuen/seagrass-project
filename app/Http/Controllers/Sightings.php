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
		$sightings = DB::select('select * from location order by created_at desc;',[1]);
		
		return view('view_report')->with(['sightings'=> $sightings]);
	}
}
