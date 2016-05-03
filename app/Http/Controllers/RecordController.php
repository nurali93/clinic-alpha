<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use App\Dispensary;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Record;
use Alert;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postStore(Request $request){
        $record = new Record;
        $id = $request->input("patientID");
        $record->pt_id = $id;
        $record->diagnosis = $request->input("diagnosis");
        $record->treatment = $request->input("treatment");
      
        $presName = "";
        $presQty = "";
        $val = $request->input("xy");
        for($count=1; $count< $val+1; $count++ ){
            $presName .= $request->input("drug_".$count);
            $presQty .= $request->input("drug_".$count."_qtt");
            $presName .= "#";
            $presQty .= "#";
        }
        $record->pres_med = $presName;
        $record->dispenseQuantity = $presQty;
        $record->save();

        $state = Queue::find($id); //retrieve whole row
        if(!is_null($state)){
        $state->status = 'Payment';
        $state->save();
        }

        $todispense = new Dispensary;
        $todispense->case_ref = $record->id;
        $todispense->dispensed_drug_code = "$presName";
        $todispense->dispensed_quantity = "$presQty";
        $todispense->save();
        //other fields in this table is to be filled by nurse using DispensaryController

        Alert::success('Submitted!')->persistent("Close")->autoclose(3000);
        return redirect()->action('DocController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
