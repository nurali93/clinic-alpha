@extends('master')
@section('content')
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
        <h1>Inventory</h1>
    </div>

    <div class="panel-body">
        <ul class="nav nav-tabs">
                <li class="active"><a href="#list" data-toggle="tab">Drug List</a>
                </li>
                <li class=""><a href="#manage" data-toggle="tab">Manage Stock</a>
                </li>
                <li class=""><a href="#supplier" data-toggle="tab">Supplier List</a>
                </li>
                <!-- <li class=""><a href="#settings" data-toggle="tab">Empty</a>
                </li> -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade active in" id="list">
                <div class="panel-heading">
                     <h2>Drug Inventory</h2>
                </div>
                <div class="panel-body">
                    <div class="input-group"> <span class="input-group-addon">Filter</span>
                        <input id="filter" type="text" class="form-control" placeholder="Type here..."><br>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Drug ID</th>
                                    <th>Drug Name</th>
                                    <th>In Stock</th>
                                    <th>Drug Type</th>
                                    <th>Remarks</th>
                                    <th>Precaution</th>
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody class="searchable">
                                <tr class="danger">
                                    <td>1</td>
                                    <td>Paracetamol</td>
                                    <td>8</td>
                                    <td>Unit</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                @foreach ($inventories as $inv)
                                <tr class="odd gradeX">
                                    <td>{{ $inv->id + 1}}</td>
                                    <td>{{ $inv->drug_name }}</td>
                                    <td>{{ $inv->drug_stock }}</td>
                                    <td>{{ $inv->drug_type }}</td>
                                    <td>{{ $inv->drug_remarks }}</td>
                                    <td>{{ $inv->drug_precaution }}</td>
                                    <td>{{ $inv->drug_supplier }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane fade" id="manage">
                <div class="panel-heading">
                     <h2>Manage Stock</h2>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>Drug ID</th>
                                    <th>Drug Name</th>
                                    <th>In Stock</th>
                                    <th>Drug Type</th>
                                    <th>Remarks</th>
                                    <th>Precaution</th>
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="danger">
                                    <td>1</td>
                                    <td>Paracetamol</td>
                                    <td>8</td>
                                    <td>Unit</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                @foreach ($inventories as $inv)
                                <tr class="odd gradeX">
                                    <td>{{ $inv->id + 1}}</td>
                                    <td>{{ $inv->drug_name }}</td>
                                    <td>{{ $inv->drug_stock }}</td>
                                    <td>{{ $inv->drug_type }}</td>
                                    <td>{{ $inv->drug_remarks }}</td>
                                    <td>{{ $inv->drug_precaution }}</td>
                                    <td>{{ $inv->drug_supplier }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-offset-11">
                    <a href="{{action('InvController@create')}}" class='btn btn-primary'>Add</a>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="supplier">
                <div class="panel-heading">
                     <h2>Supplier List</h2>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    
                                    <th>Supplier</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventories as $inv)
                                <tr class="odd gradeX">
                                    <td>{{ $inv->drug_supplier }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Advanced Tables -->
@stop