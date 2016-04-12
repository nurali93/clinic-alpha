<?php

namespace App\Http\Controllers;
use App\Queue;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Patient;

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

	  public function show($id)
    {
        $data = Queue::find($id);
        $ic = $data->pt_ic;
        $data2 = Patient::where('pt_ic', $ic)->first();

        return view('doctor.newcase')->with('data',$data)->with('data2',$data2);
    }
}