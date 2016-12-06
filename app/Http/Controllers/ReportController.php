<?php
 public function submit()
 {
	 $user= Input::all();
	   $user = new User;
	   $user->username = Input::get('username');
	   $user->email = Input::get('email');
	   $user->password = Input::get('password');
	   $user->save();

	return Redirect::back();
} 
?>