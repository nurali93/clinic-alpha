@extends('master')
@section('sidebar')
    @include('sidebar.staff')
@stop
@section('content')

<div class="panel panel-default">

    <!-- <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Dispense</a>
        </li>
        <li class=""><a href="#profile" data-toggle="tab">Sales report</a>
        </li>
    </ul> -->

    <div class="panel-heading">
        <h1>Dispensary</h1>
    </div> 
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form">
                    <div class="col-lg-6 form-group">
                    <label>Patient Name</label>
                    <p>Patient Name</p>
                    <label>Charges &amp; Medicine</label>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Charges</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                        </thead>
                        <tbody>
                            <!-- <td></td>
                            <td>Consultation fee</td>
                            <td></td>
                            <td></td> -->
                        @for($i = 0; $i<count($arr1)-1; $i++)
                        <tr><td>{{$i+1}}</td>
                            <td>{{$arr1[$i]}}</td>
                            <td>{{$arr2[$i]}}</td>
                            <td>price</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                    <br><br>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop