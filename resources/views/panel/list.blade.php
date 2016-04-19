@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1>List of Panel</h1>
        </div> 
        
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="tableA">
                    <thead>
                        <tr>
                            <th>Panel Name</th>
                            <th>Contact Person</th>
                            <th>Contact No</th>
                            <th>Extension</th>
                            <th>Fax</th>
                            <th>Email ID.</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postcode</th>
                            <th>State</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($panel as $pan)
                        <tr>
                            <td>{{ $pan->p_company }}</td>
                            <td>{{ $pan->p_contactname }}</td>
                            <td>{{ $pan->p_telno }}</td>
                            <td>{{ $pan->p_ext }}</td>
                            <td>{{ $pan->p_fax }}</td>
                            <td>{{ $pan->p_email }}</td>
                            <td>{{ $pan->p_address }}</td>
                            <td>{{ $pan->p_city }}</td>
                            <td>{{ $pan->p_postcode }}</td>
                            <td>{{ $pan->p_state }}</td>
                            <td>                            
                                <a href="{{action('PanelController@edit', $pan->id)}}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                            <td>
                                {!! Form::open(['method' => 'DELETE','route' => ['panel.destroy', $pan->id]]) !!}
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
                    <a href="{{action('PanelController@create')}}" class='btn btn-primary'>Add</a>
                </div>
            </div>

        </div>
    </div>
@stop