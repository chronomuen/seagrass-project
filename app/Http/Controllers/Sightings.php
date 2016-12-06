<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\HomeController;

class Sightings extends Controller
{
    public function viewSightings(){
		$user = DB::select('select * from users',[1]);
		
		return view('view_report')->with(['user'=> $user]);
	}
}
