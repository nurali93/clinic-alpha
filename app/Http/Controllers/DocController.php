<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Queue;
use App\Patient;
use App\Inventory;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class DocController extends Controller
{
	public function index()
	{
		$queue = Queue::all();
		$patient = Patient::all();
		return view('doctor.dashboard')->with('queue',$queue)->with('patient',$patient);
	}

	public function newcase()
	{
		$queue = Queue::all();
		return view('doctor.newcase');
	}

	public function patientdb()
	{
		$queue = Queue::all();
		return view('doctor.patientdb');
	}

	  public function show($id)
    {
        $data = Queue::find($id);
        $data->status = 'Consulting';
        $data->save();
        $ic = $data->pt_ic;
        $data2 = Patient::where('pt_ic', $ic)->first();

        $inventory = Inventory::all();

        return view('doctor.newcase')->with('data',$data)->with('data2',$data2)->with('inventory',$inventory);

    }
}