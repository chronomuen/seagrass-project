<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
	return view('about_us');
});

Route::get('/seagrass', function () {
	return view('about_seagrass');
});

Route::get('/contact', function () {
	return view('contact_us');
});

Route::get('/work', function () {
	return view('our_work');
});

Route::get('/submit', function () {
	return view('submit_report');
});

Route::get('/view', function () {
	return view('view_report');
});
Route::get('/dashboard', function () {
	return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
?>

