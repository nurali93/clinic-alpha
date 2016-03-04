<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inventory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;
use Session;

class InvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['inventory'] = inventory::all();

        return view('inventory.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //data input
        $dCode = $request->input('drug_code');
        $dName = $request->input('drug_name');
        $dLow = $request->input('drug_lowlimit');
        $dType = $request->input('drug_type');
        $dRemarks = $request->input('drug_remarks');
        $dPreCau = $request->input('drug_precaution');
        $dDPur = $request->input('dateOfPurchase');
        $dDExp = $request->input('dateOfExpiry');
        $dSupp = $request->input('drug_supplier');
        $dInt = $request->input('intakeTime');
        $dFreq = $request->input('frequency');
        $dDispQtt = $request->input('dispenseQuantity');
        $dSpu = $request->input('spu');
        $dUnitPck = $request->input('unitsInPack');

        $inventory = new Inventory;
        $inventory->drug_code = $dCode;
        $inventory->drug_name = $dName;
        $inventory->drug_lowlimit = $dLow;
        $inventory->drug_type = $dType;
        $inventory->drug_remarks = $dRemarks;
        $inventory->drug_precaution = $dPreCau;
        $inventory->dateOfPurchase = $dDPur;
        $inventory->dateOfExpiry = $dDExp;
        $inventory->drug_supplier = $dSupp;
        $inventory->intakeTime = $dInt;
        $inventory->frequency = $dFreq;
        $inventory->dispenseQuantity = $dDispQtt;
        $inventory->spu = $dSpu;
        $inventory->unitsInPack = $dUnitPck;
        $inventory->save();
        
        return redirect()->action('InvController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = Inventory::find($id);
        return response()->json($inventory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['inventory'] = Inventory::find($id);
        return view('inventory.form',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $dCode = $request->input('drug_code');
        $dName = $request->input('drug_name');
        $dLow = $request->input('drug_lowlimit');
        $dType = $request->input('drug_type');
        $dRemarks = $request->input('drug_remarks');
        $dPreCau = $request->input('drug_precaution');
        $dDPur = $request->input('dateOfPurchase');
        $dDExp = $request->input('dateOfExpiry');
        $dSupp = $request->input('drug_supplier');
        $dInt = $request->input('intakeTime');
        $dFreq = $request->input('frequency');
        $dDispQtt = $request->input('dispenseQuantity');
        $dSpu = $request->input('spu');
        $dUnitPck = $request->input('unitsInPack');


        $inventory = Inventory::find($id);
        $inventory->drug_code = $dCode;
        $inventory->drug_name = $dName;
        $inventory->drug_lowlimit = $dLow;
        $inventory->drug_type = $dType;
        $inventory->drug_remarks = $dRemarks;
        $inventory->drug_precaution = $dPreCau;
        $inventory->dateOfPurchase = $dDPur;
        $inventory->dateOfExpiry = $dDExp;
        $inventory->drug_supplier = $dSupp;
        $inventory->intakeTime = $dInt;
        $inventory->frequency = $dFreq;
        $inventory->dispenseQuantity = $dDispQtt;
        $inventory->spu = $dSpu;
        $inventory->unitsInPack = $dUnitPck;
        $inventory->save();
        $inventory->save();
        
        return redirect()->action('InvController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventory = Inventory::find($id);
        $inventory->delete();
        Session::flash('flash_message', 'Successfully deleted!');
        return redirect()->action('InvController@index');
    }
}
