<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Queue;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
	public function index()
	{
		$queue = Queue::all();
        return view('staff.dashboard')->with('queue',$queue);
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