<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inventory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['inventories'] = inventory::all();

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
        $drugName = $request->input('drug_name');
        $drugStock = $request->input('drug_stock');
        $drugType = $request->input('drug_type');
        $drugRemarks = $request->input('drug_remarks');
        $drugPre = $request->input('drug_precaution');
        $drugSupp = $request->input('drug_supplier');

        $inventory = new Inventory;
        $inventory->drug_name = $drugName;
        $inventory->drug_stock = $drugStock;
        $inventory->drug_type = $drugType;
        $inventory->drug_remarks = $drugRemarks;
        $inventory->drug_precaution = $drugPre;
        $inventory->drug_supplier = $drugSupp;
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
