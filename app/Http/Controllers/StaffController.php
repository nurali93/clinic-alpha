<?php namespace App\Http\Controllers;

class StaffController extends Controller
{
	public function index()
	{
		return view('staff.dashboard');
	}

	public function register()
	{
		return view('staff.register');
	}

	public function panel()
	{
		return view('staff.panel');
	}

	public function dispense()
	{
		return view('staff.dispensary');
	}
}