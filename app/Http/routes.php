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

// Route::get('/', function(){
// 	return view('auth/login');
// });

Route::get('/', ['middleware' => 'auth', function () {
    
}]);

Route::get('/', ['middleware' => 'admin', function () {
    
}]);

Route::get('/', ['middleware' => 'doctor', function () {
    
}]);

Route::get('/dispensary', function(){
	return view('staff.dispensary');
});

Route::get('/register', function(){
	return view('user.reg');
});

Route::get('/doctor', 'DocController@index');
Route::get('/doctor/newcase', 'DocController@newcase');
Route::get('doctor/patient', 'DocController@patientdb');

Route::get('/staff',['middleware' => 'auth', 'uses' => 'StaffController@index']);
Route::get('/staff/register',['middleware' => 'auth', 'uses' => 'StaffController@register']);
Route::get('/staff/panel',['middleware' => 'auth', 'uses' => 'StaffController@panel']);
Route::get('/staff/dispensary',['middleware' => 'auth', 'uses' => 'StaffController@dispense']);

//CRUD routing
Route::group(['middleware' => 'auth'], function(){
	Route::resource('inventory','InvController');
	Route::resource('supplier','SupplierController');
	Route::resource('patient','PatientController');	
	Route::resource('panel','PanelController');
	Route::resource('case','CaseController');
});
Route::get('/inventory',['middleware' => 'auth', 'uses' => 'InvController@index']);

Route::get('/patient',['middleware' => 'auth', 'uses' => 'PatientController@index']);

Route::get('/panel',['middleware' => 'auth', 'uses' => 'PanelController@index']);

Route::get('/supplier',['middleware' => 'auth', 'uses' => 'SupplierController@index']);

Route::get('/case',['middleware' => 'auth', 'uses' => 'CaseController@index']);

// Route::get('admin', ['middleware' => 'admin', function(){
// 	echo 'Welcome admin';
// }]);

// Route::get('doctor', ['middleware' => 'doctor', function(){
// 	echo 'Welcome doctor';
// }]);



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);