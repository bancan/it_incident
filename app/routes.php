<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('try', function ()
	{
		return View::make('try');
	});


//controller status

Route::get('status', 'StatusController@list_status');


//controller category
Route::get('category', 'CategoryController@list_category');

Route::get('category_id/{id}', 'CategoryController@select_category');

//controller incident
Route::get('incident', 'IncidentController@list_incident');

Route::get('incident_id/{id}', 'IncidentController@select_incident');

Route::get('edit_incident/{id}', 'IncidentController@edit_incident');

Route::get('create_incident', 'IncidentController@create_incident');

// Route::get('create_incident', function()
// 	{
// 		echo "sakljflkajflksa";
// 	});





