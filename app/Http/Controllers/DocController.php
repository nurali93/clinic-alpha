<?php namespace App\Http\Controllers;

class DocController extends Controller
{
	public function index()
	{
		return view('doctor.dashboard');
	}

	public function newcase()
	{
		return view('doctor.newcase');
	}

	public function patientdb()
	{
		return view('doctor.patientdb');
	}
}