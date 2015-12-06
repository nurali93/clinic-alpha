@extends('master')
@section('content')

<div class="panel panel-body">
    <div class="row">
        <div class="col-lg-12">
            <form role="form" action="{{ action('InvController@store') }}" method="post">
            	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="col-lg-6">
                    <label>Drug Name</label>
                    <input class="form-control" name="drug_name" value="{{ isset($inventory)? $inventory->drug_name : old('drug_name') }}" placeholder="Enter drug name">
                    <label>Drug Stock</label>
                    <input class="form-control" name="drug_stock" value="{{ isset($inventory)? $inventory->drug_stock : old('drug_stock') }}" placeholder="Enter drug stock">
                    <label>Drug Type</label>
                    <input class="form-control" name="drug_type" value="{{ isset($inventory)? $inventory->drug_type : old('drug_type') }}" placeholder="Enter drug type">
                    </div>
                    <div class="col-lg-6">
                    <label>Drug Remarks</label>
                    <input class="form-control" name="drug_remarks" value="{{ isset($inventory)? $inventory->drug_remarks : old('drug_remarks') }}" placeholder="Enter drug remarks">
                    <label>Drug Precaution</label>
                    <input class="form-control" name="drug_precaution" value="{{ isset($inventory)? $inventory->drug_precaution : old('drug_precaution') }}" placeholder="Enter drug precaution">
                    <label>Drug Supplier</label>
                    <input class="form-control" name="drug_supplier" value="{{ isset($inventory)? $inventory->drug_supplier : old('drug_supplier') }}" placeholder="Enter drug supplier">
                    </div>
                </div>
                <div class="col-lg-6">
                <br><button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.col-lg-6 (nested) -->
    </div>
    <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->

@stop