<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['supplier'] = supplier::all();
        return view('supplier.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->supp_name = $request->input('supp_name');
        $supplier->supp_contactName = $request->input('supp_contactName');
        $supplier->supp_phoneNo =  $request->input('supp_phoneNo');
        $supplier->supp_altNo = $request->input('supp_altNo');
        $supplier->supp_faxNo = $request->input('supp_faxNo');
        $supplier->supp_email = $request->input('supp_email');
        $supplier->supp_billAddress = $request->input('supp_billAddress');
        $supplier->supp_postcode = $request->input('supp_postcode');
        $supplier->supp_city = $request->input('supp_city');
        $supplier->supp_state = $request->input('supp_state');
        $supplier->save();

        return redirect()->action('SupplierController@index');

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
        $data['supplier'] = Supplier::find($id);
        return view('supplier.edit',$data);
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
        $supplier = Supplier::find($id);
        $supplier->supp_name = $request->input('supp_name');
        $supplier->supp_contactName = $request->input('supp_contactName');
        $supplier->supp_phoneNo =  $request->input('supp_phoneNo');
        $supplier->supp_altNo = $request->input('supp_altNo');
        $supplier->supp_faxNo = $request->input('supp_faxNo');
        $supplier->supp_email = $request->input('supp_email');
        $supplier->supp_billAddress = $request->input('supp_billAddress');
        $supplier->supp_postcode = $request->input('supp_postcode');
        $supplier->supp_city = $request->input('supp_city');
        $supplier->supp_state = $request->input('supp_state');
        $supplier->save();

        return redirect()->action('SupplierController@index');
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
