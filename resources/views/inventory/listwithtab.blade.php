@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
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
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
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
                                    <th>SPU</th>
                                    <th>Units on Hand</th>
                                </tr>
                            </thead>
                            <tbody class="searchable">
                                @foreach ($inventory as $inv)
                                <tr class="odd gradeX">
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
                                    <td>{{ $inv->spu }}</td>
                                    <td>{{ $inv->unitsOnHand }}</td>
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
                    <div class="input-group"> <span class="input-group-addon">Filter</span>
                        <input id="filter" type="text" class="form-control" placeholder="Type here..."><br>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="searchable">
                                @foreach ($inventory as $inv)
                                <tr>
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
                                    <td>
                                        <div style="float:left">
                                            <a href="{{action('InvController@edit', $inv->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                        <div style="float:right">
                                            {!! Form::open(['method' => 'DELETE','route' => ['inventory.destroy', $inv->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <br>
                        <div class="col-md-12"> 
                            <a href="{{action('InvController@create')}}" class='btn btn-primary'>Add</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!--End Advanced Tables -->
@stop