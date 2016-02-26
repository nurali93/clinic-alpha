@extends('master')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            List of Panel
        </div> 
        <div class="panel-body">
            <div class="input-group">
                <span class="input-group-addon">Filter</span>
                <input id="filter" type="text" class="form-control" placeholder="Type here..."><br>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Panel ID</th>
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
                        </tr>
                    </thead>

                    <tbody class="searchable">
                        <tr>
                            <td>1</td>
                            <td>Takaful Ikhlas</td>
                            <td>Ahmad</td>
                            <td>03-2723 9696‎</td>
                            <td>12</td>
                            <td>03-2723 9699</td>
                            <td>name@site.com</td>
                            <td>2, Jalan Setia</td>
                            <td>Setiawangsa</td>
                            <td>53000</td>
                            <td>Kuala Lumpur</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Takaful Ikhlas</td>
                            <td>Ahmad</td>
                            <td>03-2723 9696‎</td>
                            <td>12</td>
                            <td>03-2723 9699</td>
                            <td>name@site.com</td>
                            <td>2, Jalan Setia</td>
                            <td>Setiawangsa</td>
                            <td>53000</td>
                            <td>Kuala Lumpur</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Takaful Ikhlas</td>
                            <td>Ahmad</td>
                            <td>03-2723 9696‎</td>
                            <td>12</td>
                            <td>03-2723 9699</td>
                            <td>name@site.com</td>
                            <td>2, Jalan Setia</td>
                            <td>Setiawangsa</td>
                            <td>53000</td>
                            <td>Kuala Lumpur</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Takaful Ikhlas</td>
                            <td>Ahmad</td>
                            <td>03-2723 9696‎</td>
                            <td>12</td>
                            <td>03-2723 9699</td>
                            <td>name@site.com</td>
                            <td>2, Jalan Setia</td>
                            <td>Setiawangsa</td>
                            <td>53000</td>
                            <td>Kuala Lumpur</td>
                        </tr>
                        {{--
                        @foreach ($panel as $pan)
                        <tr>
                            <td>{{ $pan->p_code }}</td>
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
                        </tr>
                        @endforeach
                        --}}
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-9"></div>
                <a href="#" class='btn btn-primary'>Add</a>
                <a href="#" class='btn btn-primary'>Edit</a>
                <a href="#" class='btn btn-danger'>Delete</a>
            </div>
        </div>
    </div>
@stop