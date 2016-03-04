<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['patient'] = patient::all();
        return view('patient.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pIc = $request->input('pt_ic');
        $pName = $request->input('pt_name');
        $pCont = $request->input('pt_contactNo');
        $pDob = $request->input('pt_dob');
        $pGend = $request->input('pt_gender');
        $pPan = $request->input('pt_panel');
        $pRace = $request->input('pt_race');
        $pAddr = $request->input('pt_address');
        $pPost = $request->input('pt_postcode');
        $pCity = $request->input('pt_city');
        $pState = $request->input('pt_state');

        $patient = new Patient;
        $patient->pt_ic = $pIc;
        $patient->pt_name = $pName;
        $patient->pt_contactNo = $pCont;
        $patient->pt_dob = $pDob;
        $patient->pt_gender = $pGend;
        $patient->pt_panel = $pPan;
        $patient->pt_race = $pRace;
        $patient->pt_address = $pAddr;
        $patient->pt_postcode = $pPost;
        $patient->pt_city = $pCity;
        $patient->pt_state = $pState;
        $patient->save();

        return redirect()->action('PatientController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['patient'] = Patient::find($id);
        return view('patient.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pIc = $request->input('pt_ic');
        $pName = $request->input('pt_name');
        $pCont = $request->input('pt_contactNo');
        $pDob = $request->input('pt_dob');
        $pGend = $request->input('pt_gender');
        $pPan = $request->input('pt_panel');
        $pRace = $request->input('pt_race');
        $pAddr = $request->input('pt_address');
        $pPost = $request->input('pt_postcode');
        $pCity = $request->input('pt_city');
        $pState = $request->input('pt_state');

        $patient = Patient::find($id);
        $patient->pt_ic = $pIc;
        $patient->pt_name = $pName;
        $patient->pt_contactNo = $pCont;
        $patient->pt_dob = $pDob;
        $patient->pt_gender = $pGend;
        $patient->pt_panel = $pPan;
        $patient->pt_race = $pRace;
        $patient->pt_address = $pAddr;
        $patient->pt_postcode = $pPost;
        $patient->pt_city = $pCity;
        $patient->pt_state = $pState;
        $patient->save();

        return redirect()->action('PatientController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        //Session::flash('flash_message', 'Successfully deleted!');
        return redirect()->action('PatientController@index');
    }
}
