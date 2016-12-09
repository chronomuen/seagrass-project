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

			$infos = DB::select('select * from reports where reports.user_id='.$id.' order by reports.date desc,reports.time desc;');

		
		return view('profile')->with(['infos' => $infos]);
	}
}
