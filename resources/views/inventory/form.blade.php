@extends('master')
@section('content')

<div class="panel panel-body">
    <div class="row">
        <div class="col-lg-12">
            @if (isset($inventory))
            <form action="{{ action('InvController@update', $inventory->id) }}" method="post">
                <input type="hidden" name="_method" value="put">
            @else
            <form action="{{ action('InvController@store')}}" method="post">
            @endif
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    
                    <div class="col-lg-6">
                        <label>Drug Code</label>
                        <input class="form-control" name="drug_code" value="{{ isset($inventory)? $inventory->drug_code : old('drug_code') }}" placeholder="Enter drug code">
                        <label>Drug Name</label>
                        <input class="form-control" name="drug_name" value="{{ isset($inventory)? $inventory->drug_name : old('drug_name') }}" placeholder="Enter drug name">
                        <label>Drug Low Limit</label>
                        <input class="form-control" name="drug_lowlimit" value="{{ isset($inventory)? $inventory->drug_lowlimit : old('drug_lowlimit') }}" placeholder="Enter drug low limit">
                        <label>Drug Type</label>
                        <input class="form-control" name="drug_type" value="{{ isset($inventory)? $inventory->drug_type : old('drug_type') }}" placeholder="Enter drug type">
                    {{-- </div>
                    
                    <div class="col-lg-6"> --}}
                        <label>Drug Remarks</label>
                        <input class="form-control" name="drug_remarks" value="{{ isset($inventory)? $inventory->drug_remarks : old('drug_remarks') }}" placeholder="Enter drug remarks">
                        <label>Drug Precaution</label>
                        <input class="form-control" name="drug_precaution" value="{{ isset($inventory)? $inventory->drug_precaution : old('drug_precaution') }}" placeholder="Enter drug precaution">
                        <label>Drug Date Of Purchase</label>
                        <input type="date" class="form-control" name="dateOfPurchase" value="{{ isset($inventory)? $inventory->dateOfPurchase : old('dateOfPurchase') }}" placeholder="Enter drug date Of Purchase">
                        <label>Drug Date Of Expiry</label>
                        <input type="date" class="form-control" name="dateOfExpiry" value="{{ isset($inventory)? $inventory->dateOfExpiry : old('dateOfExpiry') }}" placeholder="Enter drug date Of Expiry">
                        <label>Drug Supplier</label>
                        <input class="form-control" name="drug_supplier" value="{{ isset($inventory)? $inventory->drug_supplier : old('drug_supplier') }}" placeholder="Enter drug supplier">
                        <label>Drug Intake Time</label>
                        <input class="form-control" name="intakeTime" value="{{ isset($inventory)? $inventory->intakeTime : old('intakeTime') }}" placeholder="Enter drug intake time">
                        <label>Drug Frequency</label>
                        <input class="form-control" name="frequency" value="{{ isset($inventory)? $inventory->frequency : old('frequency') }}" placeholder="Enter drug frequency">
                        <label>Drug Dispense Quantity</label>
                        <input class="form-control" name="dispenseQuantity" value="{{ isset($inventory)? $inventory->dispenseQuantity : old('dispenseQuantity') }}" placeholder="Enter drug dispense quantity">
                        <label>Drug SPU</label>
                        <input class="form-control" name="spu" value="{{ isset($inventory)? $inventory->spu : old('spu') }}" placeholder="Enter drug spu">
                        <label>Drug Units per Pack</label>
                        <input class="form-control" name="unitsInPack" value="{{ isset($inventory)? $inventory->unitsInPack : old('unitsInPack') }}" placeholder="Enter drug units per pack">
                    </div>

                </div>       
        </div>
    </div>
    <div class="row">
        <br>
        <div class="col-md-10"></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Clear</button> 
    </div>
            </form>
</div>
<!-- /.panel-body -->

@stop