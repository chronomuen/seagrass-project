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


Route::get('/dashboard/submit', function () {
	return view('submit_report');
});

Route::get('/dashboard/map', function () {
	return view('view_map');
});

Route::get('/dashboard/list', 'Sightings@viewSightings');

Route::get('/dashboard/profile', 'profile@viewProfile');

Route::get('/dashboard', 'profile@viewProfile');

Route::get('/dashboard/map', 'Sightings@viewMap');

Route::post('/dashboard/add', array('uses'=>'Sightings@create'));

Auth::routes();

?>

