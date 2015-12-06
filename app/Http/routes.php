<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('empty');
// });

Route::get('/', function(){
	return view('login');
});

Route::get('/dispensary', function(){
	return view('staff.dispensary');
});

Route::get('/doctor', 'DocController@index');
Route::get('/doctor/newcase', 'DocController@newcase');
Route::get('doctor/patient', 'DocController@patientdb');

Route::get('/staff', 'StaffController@index');
Route::get('/staff/register', 'StaffController@register');
Route::get('/staff/panel', 'StaffController@panel');
Route::get('/staff/dispensary', 'StaffController@dispense');

Route::resource('inventory','InvController');
Route::get('/inventory', 'InvController@index');