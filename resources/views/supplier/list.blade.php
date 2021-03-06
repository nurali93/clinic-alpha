@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>List of Supplier</h1>
        </div>

        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableA">
                    <thead>
                        <tr>
                            <th>Supplier ID</th>
                            <th>Supplier Name</th>
                            <th>Contact Person</th>
                            <th>Contact No</th>
                            <th>Alternate No</th>
                            <th>Fax</th>
                            <th>Email ID.</th>
                            <th>Address</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>State</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $supp)
                        <tr>
                            <td>{{ $supp->id }}</td>
                            <td>{{ $supp->supp_name }}</td>
                            <td>{{ $supp->supp_contactName }}</td>
                            <td>{{ $supp->supp_phoneNo }}</td>
                            <td>{{ $supp->supp_altNo }}</td>
                            <td>{{ $supp->supp_faxNo }}</td>
                            <td>{{ $supp->supp_email }}</td>
                            <td>{{ $supp->supp_billAddress }}</td>
                            <td>{{ $supp->supp_postcode }}</td>
                            <td>{{ $supp->supp_city }}</td>
                            <td>{{ $supp->supp_state }}</td>
                            <td>
                                <a href="{{action('SupplierController@edit', $supp->id)}}" class="btn btn-warning">Edit</a></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['supplier.destroy', $supp->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="row">
                <br>
                <div class="col-md-12">
                    <a href="{{action('SupplierController@create')}}" class='btn btn-primary btn-sm'>Add</a>
                </div>
            </div>
        </div>
    </div>
@stop