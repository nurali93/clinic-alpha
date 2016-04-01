<?php

namespace App\Http\Controllers;
use App\Queue;

class DocController extends Controller
{
	public function index()
	{
		$queue = Queue::all();
		return view('doctor.dashboard')->with('queue',$queue);
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