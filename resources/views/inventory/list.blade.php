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
                                    <th>Drug Code</th>
                                    <th>Name</th>
                                    <th>Low Limit</th>
                                    <th>Type</th>
                                    <th>Remarks</th>
                                    <th>Precaution</th>
                                    <th>Date of Purchase</th>
                                    <th>Date of Expiry</th>
                                    <th>Supplier</th>
                                    <th>Intake Time</th>
                                    <th>Frequency</th>
                                    <th>Dispense Quantity</th>
                                    <th>SPU</th>
                                    <th>Units per Pack</th>
                                </tr>
                            </thead>
                            <tbody class="searchable">
                                @foreach ($inventory as $inv)
                                <tr class="odd gradeX">
                                    <td>{{ $inv->drug_code }}</td>
                                    <td>{{ $inv->drug_name }}</td>
                                    <td>{{ $inv->drug_lowlimit }}</td>
                                    <td>{{ $inv->drug_type }}</td>
                                    <td>{{ $inv->drug_remarks }}</td>
                                    <td>{{ $inv->drug_precaution }}</td>
                                    <td>{{ $inv->dateOfPurchase }}</td>
                                    <td>{{ $inv->dateOfExpiry }}</td>
                                    <td>{{ $inv->drug_supplier }}</td>
                                    <td>{{ $inv->intakeTime }}</td>
                                    <td>{{ $inv->frequency }}</td>
                                    <td>{{ $inv->dispenseQuantity }}</td>
                                    <td>{{ $inv->spu }}</td>
                                    <td>{{ $inv->unitsInPack }}</td>
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
                                    <th>Drug Code</th>
                                    <th>Name</th>
                                    <th>Low Limit</th>
                                    <th>Type</th>
                                    <th>Remarks</th>
                                    <th>Precaution</th>
                                    <th>Date of Purchase</th>
                                    <th>Date of Expiry</th>
                                    <th>Supplier</th>
                                    <th>Intake Time</th>
                                    <th>Frequency</th>
                                    <th>Dispense Quantity</th>
                                    <th>SPU</th>
                                    <th>Units per Pack</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inventory as $inv)
                                <tr class="odd gradeX">
                                    <td>{{ $inv->drug_code }}</td>
                                    <td>{{ $inv->drug_name }}</td>
                                    <td>{{ $inv->drug_lowlimit }}</td>
                                    <td>{{ $inv->drug_type }}</td>
                                    <td>{{ $inv->drug_remarks }}</td>
                                    <td>{{ $inv->drug_precaution }}</td>
                                    <td>{{ $inv->dateOfPurchase }}</td>
                                    <td>{{ $inv->dateOfExpiry }}</td>
                                    <td>{{ $inv->drug_supplier }}</td>
                                    <td>{{ $inv->intakeTime }}</td>
                                    <td>{{ $inv->frequency }}</td>
                                    <td>{{ $inv->dispenseQuantity }}</td>
                                    <td>{{ $inv->spu }}</td>
                                    <td>{{ $inv->unitsInPack }}</td>
                                    <td><a href="{{action('InvController@edit', $inv->id)}}" class="btn btn-warning">Edit</a></td>
                                    <td>
                                        <form action="{{action('InvController@destroy',$inv->id)}}" method="post">
                                            <input type="hidden" name="_method" value="delete">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <button type="submit" class = 'btn btn-danger'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
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
                                @foreach ($inventory as $inv)
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