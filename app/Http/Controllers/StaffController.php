<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Queue;
use App\Dispensary;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Record;
use App\Inventory;
use App\Panel;

class StaffController extends Controller
{
	public function index()
	{
		$queue = Queue::all();
		$patient = Patient::all();
        return view('staff.dashboard')->with('queue',$queue)->with('patient',$patient);
	}

	public function register()
	{
		return view('staff.register');
	}

	public function panel()
	{
		return view('staff.panel');
	}

	public function dispense($ic, $name)
	{
		$getID = Patient::where('pt_ic', $ic)->first(); //whole row
		$deID = $getID->id; //get the id from the ic
		$getcaseID = Record::where('pt_id', $deID)->first();
		$caseID = $getcaseID->id; 

		$disData = Dispensary::where('case_ref', $caseID)->first(); //xpe pakai first() sbb setiap case unik, case lain xpakai id ni
		$arrQty = (explode("#", $disData->dispensed_quantity));
		$arrDrug = (explode("#",$disData->dispensed_drug_code));
		//need declare $prices array x?
		$prices = array();
		for($x=0; $x<count($arrDrug)-1;$x++){
			//get price of each drug into an array
			$hehe = Inventory::where('drug_name', $arrDrug[$x])->first();
			$prices[$x] = $hehe->spu;
		}
		// $arrOne = count($arrDrug);
		// arr1 = druglist , arr2= respective qty of drug, arr3= respective price of drug

		$panel = Panel::all();
		return view('staff.dispensary')->with('name',$name)->with('arr2',$arrQty)->with('arr1',$arrDrug)->with('arr3',$prices)->with('panel',$panel);
	}

	public function removeQueue()
	{
		$queue = Queue::all();
		$patient = Patient::all();
		//insert delete from queue
		return redirect()->action('StaffController@index')->with('queue',$queue)->with('patient',$patient);
        //return view('staff.dashboard');
	}

}