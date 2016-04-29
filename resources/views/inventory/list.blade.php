@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>Inventory</h1>
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableA">
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
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        @foreach ($inventory as $inv)
                            @if($inv->unitsOnHand <= $inv->drug_lowlimit)
                                <tr class="danger">
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
                                    <td>
                                            <a href="{{action('InvController@edit', $inv->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                            {!! Form::open(['method' => 'DELETE','route' => ['inventory.destroy', $inv->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                    </td>
                                </tr>
                            @else
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
                                    <td>{{ $inv->spu }}</td>
                                    <td>{{ $inv->unitsOnHand }}</td>
                                    <td>
                                            <a href="{{action('InvController@edit', $inv->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                    </td>
                                    <td>
                                            {!! Form::open(['method' => 'DELETE','route' => ['inventory.destroy', $inv->id]]) !!}
                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                            {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endif
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
@stop