@extends('master')
@section('sidebar')
    @include('sidebar.doctor')
@stop
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            List of Patient
        </div> 
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableA">
                    <thead>
                        <tr>
                            <th>IC</th>
                            <th>Name</th>
                            <th>Contact No</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Panel</th>
                            <th>Race</th>
                            <th>Address</th>
                            <th>Postcode</th>
                            <th>City</th>
                            <th>State</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patient as $pat)
                        <tr>
                            <td>{{ $pat->pt_ic }}</td>
                            <td>{{ $pat->pt_name }}</td>
                            <td>{{ $pat->pt_contactNo }}</td>
                            <td>{{ $pat->pt_dob }}</td>
                            <td>{{ $pat->pt_gender }}</td>
                            <td>{{ $pat->pt_panel }}</td>
                            <td>{{ $pat->pt_race }}</td>
                            <td>{{ $pat->pt_address }}</td>
                            <td>{{ $pat->pt_postcode }}</td>
                            <td>{{ $pat->pt_city }}</td>
                            <td>{{ $pat->pt_state }}</td>
                            <td><a href="{{action('PatientController@edit', $pat->id)}}" class="btn btn-warning">Edit</a></td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['patient.destroy', $pat->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop