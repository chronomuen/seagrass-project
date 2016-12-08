<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\HomeController;

use DB;

use Auth;

class profile extends Controller
{
    public function viewProfile(){
		$user = Auth::user();
		$id = $user->id;
		$locations = DB::select('select * from user_report where user_id='.$id.';',[1]);
		$infos = array();
		foreach($locations as $loc){
			$info = DB::select('select * from reports where id='.$loc->report_id.';',[1]);
			array_push($infos,$info);
		}
		
		return view('profile')->with(['infos' => $infos]);
	}
}
